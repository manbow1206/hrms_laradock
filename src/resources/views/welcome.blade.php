<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>
</header>

<a href="register.php">新規登録</a>
<body>
  <h1>iYell 社員管理システム</h1>
  <form>
  <table border="1" style="border-collapse: collapse" width="80%" >
    <tr bgcolor="gainsboro">
      <th width=>ID▲</th>
      <th width=>社員番号△</th>
      <th>部署名△</th>
      <th>性別△</th>
      <th></th>
    </tr>


    <tr>
      <td>1</td>
      <td>I-101</td>
      <td>CEO's office</td>
      <td>つかぽん</td>
      <td><a href="edit.php">編集</a>/<a href="delete.php">削除</a></td>
    </tr>

    <tr>
      <td>2</td>
      <td>I-102</td>
      <td>CSD</td>
      <td>まま</td>
      <td><a href="edit.php">編集</a>/<a href="delete.php">削除</a></td>
    </tr>

    <tr>
      <td>3</td>
      <td>I-103</td>
      <td>ダンドリ カッサク</td>
      <td>ちーねぇ</td>
      <td><a href="edit.php">編集</a>/<a href="delete.php">削除</a></td>
    </tr>



    <tr>
      <!-- ここで、foreach分が入ると思われ-->
    </tr>
  </table>
</form>
</body>
