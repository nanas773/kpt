<html>
  <head></head>
  <body>
    <div>
      ログイン済み
      <ul>
        <li>{{ $user->token }}</li>
        <li>{{ $user->getId() }}</li>
        <li>{{ $user->getNickname() }}</li>
        <li>{{ $user->getName() }}</li>
        <li>{{ $user->getEmail() }}</li>
        <li>{{ $user->getAvatar() }}</li>
      </ul>
    </div>
  </body>
</html>
