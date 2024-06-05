<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            width: 50%;
            margin-left: 25%;
            margin-right: 25%;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        tr:nth-child(odd) {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #d3e0ea;
        }

        .slika {
            padding-top: 20px;
            width: 100%;
            height: 500px;
            display: block;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <h2 align="center">Najbolje knjige</h2>
    <table id="books-table">
        <tr style="background-color: #ccc;">
            <th>Naslov</th>
            <th>Autor</th>
            <th>Zemlja</th>
            <th>Prvo izdanje</th>
            <th>Ocjena</th>
        </tr>
    </table>
    <img class="slika" src="slike/books.jpeg" alt="knjige">
    <script>
        fetch('knjige.json')
            .then(response => response.json())
            .then(data => {
                const table = document.getElementById('books-table');

                data.forEach(book => {
                    const row = table.insertRow();
                    row.innerHTML = `
                        <td>${book.naslov}</td>
                        <td>${book.autor}</td>
                        <td>${book.zemlja}</td>
                        <td>${book.prvoizdanje}</td>
                        <td>${book.ocjena}</td>
                    `;
                });
            })
            .catch(error => console.error('Error:', error));
    </script>
        <h2 align="center">Vaše primjedbe</h2>
    <form action="prijedlog.php" method="post" align="center">
        <label for="ime">Ime:</label><br>
        <input type="text" id="ime" name="ime"><br>
        <label for="email">E-pošta:</label><br>
        <input type="text" id="email" name="email"><br>
        <label for="prijedlog">Prijedlog:</label><br>
        <textarea id="prijedlog" name="prijedlog"></textarea><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>