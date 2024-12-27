<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>  
</head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">亂搞</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        List
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
              
            </ul>
                
                <div>
                    <input id="searchInput" type="text" class="form-control" placeholder="Enter search query">
                    <button id="searchButton" class="btn btn-outline-success" type="button">Search</button>
                </div>
            </div>
          
        </div>
    </nav>




    <script>
        $(document).ready(function () {
            $("#searchButton").click(function () {
                // 收集輸入數據
                const searchQuery = $("#searchInput").val(); // 假設有一個輸入框

                // AJAX 請求
                $.ajax({
                    url: "/black.php", // 後端的 API 路徑
                    type: "GET",    // 或 POST，根據需求調整
                    data: { query: searchQuery }, // 傳遞的參數
                    success: function (response) {
                        // 處理成功的回應
                        console.log("搜尋結果：", response);
                        $("#resultContainer").html(response); // 將結果顯示到某個容器
                    },
                    error: function (xhr, status, error) {
                        // 處理錯誤
                        console.error("發生錯誤：", error);
                    }
                });
            });
        });




    </script>

  </body>


</html>
