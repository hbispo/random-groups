<!DOCTYPE html>
<html>

<head>
    <title>Random groups</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="http://localhost/bispo/sortear-grupos/favicon.png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poiret+One&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <link rel="stylesheet" href="https://unpkg.com/filepond/dist/filepond.css">

    <link rel="stylesheet" type="text/css" href="style.css">

    <script src="functions.js"></script>
</head>

<body>
    <main>
        <h1>Pick random groups</h1>

        <form name="groupsForm">
            <p>Don't want to repeat previous groups? Load a JSON file:<br>
                <input type="file" name="previousGroups" accept=".json" onchange="loadPreviousGroups()"></p>

            <textarea placeholder="Who are the people? (one per line)" name="people"></textarea>

            <input type="button" name="pairs" value="In pairs" onclick="pickGroups(2)">
            <input type="button" name="trios" value="trios" onclick="pickGroups(3)">
            <input type="button" name="quartets" value="or quartets" onclick="pickGroups(4)">
        </form>
    </main>
</body>

</html>