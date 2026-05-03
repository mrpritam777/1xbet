<?php

function data_store_path(string $filename): string
{
    return __DIR__ . '/../data/' . $filename;
}

function default_promo_codes(): array
{
    return [
        ['tag' => 'Top Code', 'tagColor' => 'from-emerald-400 to-cyan-400', 'code' => '1XHUB100', 'bonus' => '100% Bonus', 'amount' => 'Up to Rs10,000', 'used' => '3456'],
        ['tag' => 'Exclusive', 'tagColor' => 'from-violet-500 to-fuchsia-500', 'code' => 'HUB200', 'bonus' => '200% Bonus', 'amount' => 'Up to Rs20,000', 'used' => '2890'],
        ['tag' => 'Popular', 'tagColor' => 'from-orange-400 to-red-500', 'code' => 'HUB300', 'bonus' => '300% Bonus', 'amount' => 'Up to Rs30,000', 'used' => '2150'],
        ['tag' => 'Special', 'tagColor' => 'from-blue-400 to-indigo-500', 'code' => '1XHUBVIP', 'bonus' => 'VIP Bonus', 'amount' => 'Up to Rs50,000', 'used' => '1876'],
    ];
}

function read_json_file(string $filename, array $fallback = []): array
{
    $path = data_store_path($filename);
    if (!file_exists($path)) {
        return $fallback;
    }

    $raw = file_get_contents($path);
    if ($raw === false) {
        return $fallback;
    }

    $decoded = json_decode($raw, true);
    if (!is_array($decoded)) {
        return $fallback;
    }

    return $decoded;
}

function write_json_file(string $filename, array $payload): bool
{
    $path = data_store_path($filename);
    $json = json_encode($payload, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    if ($json === false) {
        return false;
    }

    return file_put_contents($path, $json) !== false;
}

function load_promo_codes(): array
{
    $fallback = default_promo_codes();
    $data = read_json_file('promo-codes.json', $fallback);
    return count($data) ? $data : $fallback;
}

function save_promo_codes(array $codes): bool
{
    return write_json_file('promo-codes.json', array_values($codes));
}

function load_messages(): array
{
    return read_json_file('messages.json', []);
}

function save_messages(array $messages): bool
{
    return write_json_file('messages.json', array_values($messages));
}
