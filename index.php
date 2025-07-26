<?php
$url = $_GET['url'] ?? '';
if ($url) {
    header("Location: v2rayng://install-config?url=" . $url);
    exit;
}
echo "Missing URL";
