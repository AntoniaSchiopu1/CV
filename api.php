<?php
require_once 'config.php';

header('Content-Type: application/json');

$username = 'AntoniaSchiopu1'; 
$token = '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'; 

$proiecte_locale = [];
$sql = "SELECT * FROM proiecte_locale";
$res = $conn->query($sql);
if ($res) {
    while ($row = $res->fetch_assoc()) {
        $proiecte_locale[$row['name']] = [
            'name' => $row['name'],
            'description' => $row['description'],
            'language' => $row['language'],
            'stargazers_count' => (int)$row['stargazers_count'],
            'forks_count' => (int)$row['forks_count'],
            'updated_at' => '2026-01-01T00:00:00Z',
            'html_url' => $row['html_url']
        ];
    }
}

$url = "https://api.github.com/users/$username/repos";
$options = [
    'http' => [
        'method' => 'GET',
        'header' => [
            "User-Agent: PHP-Proxy-App",
            "Authorization: token $token"
        ],
        'ignore_errors' => true
    ]
];

$context = stream_context_create($options);
$response = @file_get_contents($url, false, $context);

if ($response === FALSE || (isset($http_response_header) && strpos($http_response_header[0], '200') === FALSE)) {
    echo json_encode(array_values($proiecte_locale));
    $conn->close();
    exit;
}

$github_repos = json_decode($response, true);
if (!is_array($github_repos)) {
    echo json_encode(array_values($proiecte_locale));
    $conn->close();
    exit;
}

$rezultat_final = [];

foreach ($github_repos as $repo) {
    if (isset($repo['fork']) && $repo['fork'] === true) {
        continue;
    }

    $nume = $repo['name'];
    
    $descriere = !empty($repo['description']) ? $repo['description'] : "Fara descriere disponibila.";
    if (($descriere === "Fara descriere disponibila." || empty($repo['description'])) && isset($proiecte_locale[$nume])) {
        $descriere = $proiecte_locale[$nume]['description'];
    }

    $rezultat_final[] = [
        'name' => $nume,
        'description' => $descriere,
        'language' => !empty($repo['language']) ? $repo['language'] : (isset($proiecte_locale[$nume]) ? $proiecte_locale[$nume]['language'] : 'Nespecificat'),
        'stargazers_count' => (int)$repo['stargazers_count'],
        'forks_count' => (int)$repo['forks_count'],
        'updated_at' => isset($repo['updated_at']) ? $repo['updated_at'] : '2026-01-01T00:00:00Z',
        'html_url' => $repo['html_url']
    ];
}

usort($rezultat_final, function($a, $b) {
    return strtotime($b['updated_at']) - strtotime($a['updated_at']);
});

if (count($rezultat_final) < 5) {
    foreach ($proiecte_locale as $nume_local => $date_locale) {
        $exista = false;
        foreach ($rezultat_final as $rf) {
            if ($rf['name'] === $nume_local) { $exista = true; break; }
        }
        if (!$exista) {
            $rezultat_final[] = $date_locale;
        }
    }
}

echo json_encode($rezultat_final);
$conn->close();
?>