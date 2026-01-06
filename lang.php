<?php
session_start();

$default_lang = 'en';
$available_langs = ['en', 'hi', 'te'];

// Get language from URL ?lang=fr
if (isset($_GET['lang']) && in_array($_GET['lang'], $available_langs)) {
    $_SESSION['lang'] = $_GET['lang'];
}

// Use session or fallback
$lang_code = $_SESSION['lang'] ?? $default_lang;

// Load language file
$lang = require __DIR__ . "/languages/{$lang_code}.php";
