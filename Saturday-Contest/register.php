<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:500&display=swap" rel="stylesheet">
    <title>세명컴고 토코파</title>
    <style media="screen">
        * {
            font-family: 'Noto Sans KR', sans-serif;
        }
    </style>
</head>
<body>
    <header>
         <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
             <a href="index.php" class="navbar-brand">세명컴고 토코파</a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav mr-auto">
                     <li class="nav-item dropdown">
                         <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             순위현황
                         </a>
                         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                             <a href="#" class="dropdown-item">시즌 배치 결과</a>
                             <a href="#" class="dropdown-item">Bronze</a>
                             <a href="#" class="dropdown-item">Silver</a>
                             <a href="#" class="dropdown-item">Gold</a>
                         </div>
                     </li>
                     <li class="nav-item">
                         <a href="dailyresult.php" class="nav-link">오늘의 대회 결과</a>
                     </li>
                     <li class="nav-item">
                         <a href="#" class="nav-link">대회안내</a>
                     </li>
                 </ul>
                 <ul class="navbar-nav ml-auto">
                     <li class="nav-item"><a href="register.php" class="nav-link">회원가입</a></li>
                     <li class="nav-item"><a href="login.php" class="nav-link">로그인</a></li>
                 </ul>
             </div>
         </nav>
     </header>
     <main role="main">
         <div class="container">
             <h3 class="mt-4 mb-4">
                 회원가입
             </h3>
         </div>
         <form action="" class="container">
             <div class="form-group row">
                 <label for="" class="col-sm-2 col-form-label">아이디</label>
                 <div class="col-sm-10">
                     <input type="text" name="identy" class="form-control" placeholder="코드업 아이디와 일치시켜 주시기 바랍니다.">
                 </div>
             </div>
             <div class="form-group row">
                 <label for="" class="col-sm-2 col-form-label">이름</label>
                 <div class="col-sm-10">
                     <input type="text" name="name" class="form-control">
                 </div>
             </div>
             <div class="form-group row">
                 <label for="" class="col-sm-2 col-form-label">기수</label>
                 <div class="col-sm-10">
                     <select name="" id="" class="form-control">
                         <option value="val1">1기</option>
                         <option value="val2">2기</option>
                     </select>
                 </div>
             </div>
             <div class="form-group row">
                 <label for="" class="col-sm-2 col-form-label">비밀번호</label>
                 <div class="col-sm-10">
                     <input type="password" name="pw" value="" class="form-control">
                 </div>
             </div>
             <div class="form-group row">
                 <label for="" class="col-sm-2 col-form-label">비밀번호 확인</label>
                 <div class="col-sm-10">
                     <input type="password" name="pwch" value="" class="form-control">
                 </div>
             </div>
             <div class="form-group row">
                 <label for="" class="col-sm-2 col-form-label">전화번호</label>
                 <div class="form-row col-sm-10">
                     <div class="col-2"><input type="text" name="num_1" class="form-control"></div>
                     <span>-</span>
                     <div class="col-2"><input type="text" name="num_2" class="form-control"></div>
                     <span>-</span>
                     <div class="col-2"><input type="text" name="num_3" class="form-control"></div>
                 </div>
             </div>
             <div class="form-group row">
                 <label for="" class="col-sm-2 col-form-label">이메일</label>
                 <div class="col-sm-10">
                     <input type="email" name="email" value="" class="form-control" placeholder="이메일은 비밀번호 찾기에 이용됩니다.">
                 </div>
             </div>
             <div class="form-group row">
                 <label for="" class="col-sm-2 col-form-label">동의</label>
                 <div class="col-sm-10">
                     <div class="form-check mt-2">
                         <input type="checkbox" class="form-check-input">
                         <label for="">개인정보 제공에 동의합니다.</label>
                     </div>
                 </div>
             </div>
             <div class="col-auto">
                 <button type="submit" class="btn btn-primary mt-2">가입하기</button>
             </div>
         </form>
     </main>
     <hr>
     <footer class="container">
         <h6 class="text-center mt-2">
             COPYRIGHT &copy; 2019-SeungJun Lee
             <br>
             All Rights Reserved
         </h6>
     </footer>
</body>
</html>
