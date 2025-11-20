<?php $title = "Heaven Knows"; 
$artist = "Orange & Lemons"; 
$mood = "Emotional"; 

$verseCount = 3; 
$chorusRepeat = "2"; 
$totalChorus = $chorusRepeat + 1; 

$nouns = [ "night", "heart", "angel", "room", "dreams", "windows", "voice", "moment" ]; 
$verbs = [ "cry", "feel", "leave", "burn", "wander", "search", "pass", "lying", "drift", "try", "start" ]; 
$adjectives = [ "lonely", "tired", "fading", "silent", "broken", "little" ]; 

$verses = [ 
    "verse1" => 
    [ "There are times when I'm " . $verbs[7] . " in the " . $adjectives[3] . " " . $nouns[0] . ",", "Wondering why my " . $adjectives[4] . " " . $nouns[1] . " still chooses to " . $verbs[0] . ",", "With eyes like " . $nouns[5] . " on a " . $adjectives[0] . " rainy day." ], 
    
    "verse2" => 
    [ "Now my thoughts " . $verbs[8] . " inside this " . $adjectives[5] . " " . $nouns[3] . ",", "Hoping my " . $adjectives[2] . " " . $nouns[4] . " will somehow come true,", "As I " . $verbs[9] . " to " . $verbs[3] . " the weight of this " . $adjectives[1] . " " . $nouns[0] . "." ], 
    
    "verse3" => 
    [ "My lips are " . $adjectives[1] . " and my eyes " . $verbs[10] . " to " . $verbs[3] . ",", "Still I " . $verbs[5] . " for that " . $adjectives[0] . " " . $nouns[6] . " I cannot find,", "Lighting another " . $nouns[7] . " just to " . $verbs[6] . " the " . $nouns[0] . "." ] ]; $chorus = [ "This " . $adjectives[4] . " " . $nouns[2] . " has " . $verbs[4] . " far from me — will she ever find her way back home?" ]; ?>




<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Paul Pineda Lyric Remix Heaven Knows</title>
    <style>
        body {
            font-family: "Times, serif";
            background-image: url('Heaven.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 70%;
            margin: auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.7);
            border-radius: 10px;
        }

        h1, h2 {
            color: black;
            border-bottom: 1px solid black;
            padding-bottom: 5px;
            text-shadow: 1px 1px 2px rgba(255,255,255,0.8);
        }

        .lyric-line {
            margin-left: 20px;
            font-size: 18px;
            color: black;
            text-shadow: 1px 1px 2px rgba(255,255,255,0.8);
        }

        .info-box {
            background: rgba(255,255,255,0.6);
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
            color: black;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Welcome to Paul Pineda PHP Lyric Remix</h1>

    <div class="info-box">
        <p><strong>Song Title:</strong> Heaven Knows</p>
        <p><strong>Artist:</strong> Inspired by Orange & Lemons</p>
        <p><strong>Mood:</strong> Emotional</p>
        <p><strong>Total Verses:</strong> 3</p>
        <p><strong>Chorus Repeats:</strong> 3 times</p>
    </div>

    <h2>Verse1</h2>
    <div class='section'>
        <p class='lyric-line'>There are times when I'm lying in the silent night,</p>
        <p class='lyric-line'>Wondering why my broken heart still chooses to cry,</p>
        <p class='lyric-line'>With eyes like windows on a lonely rainy day.</p>
    </div>
    <h2>Chorus</h2>
    <div class='section'>
        <p class='lyric-line'>This broken angel has wandered far from me will she ever find her way back home?</p>
    </div>

    <h2>Verse2</h2>
    <div class='section'>
        <p class='lyric-line'>Now my thoughts drift inside this little room,</p>
        <p class='lyric-line'>Hoping my fading dreams will somehow come true,</p>
        <p class='lyric-line'>As I try to burn the weight of this tired night.</p>
    </div>
    <h2>Chorus</h2>
    <div class='section'>
        <p class='lyric-line'>This broken angel has wandered far from me will she ever find her way back home?</p>
    </div>

    <h2>Verse3</h2>
    <div class='section'>
        <p class='lyric-line'>My lips are tired and my eyes start to burn,</p>
        <p class='lyric-line'>Still I search for that lonely voice I cannot find,</p>
        <p class='lyric-line'>Lighting another moment just to pass the night.</p>
    </div>
    <h2>Chorus</h2>
    <div class='section'>
        <p class='lyric-line'>This broken angel has wandered far from me will she ever find her way back home?</p>
    </div>

</div>

</body>
</html>

