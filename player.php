<?php
// Simple player page
$stream = isset($_GET['stream']) ? $_GET['stream'] : 'edge2/star-sports-1';
?>
<!DOCTYPE html>
<html>
<head>
    <title>OwlOverDown TV - Player</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            background: #000;
        }
        #player {
            width: 100%;
            height: 100%;
            border: none;
        }
    </style>
</head>
<body>
    <iframe id="player" src="https://cdn.roarzone.info/<?php echo htmlspecialchars($stream); ?>/index.m3u8" allowfullscreen allow="autoplay; encrypted-media" style="width:100%; height:100%; border:none;"></iframe>
    
    <script>
        // Optional: Add player controls or error handling
    </script>
</body>
</html>
