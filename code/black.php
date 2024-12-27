
<?php

// 確保請求是通過 AJAX 發送的
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // 接收來自 AJAX 的查詢參數
    $query = isset($_GET['query']) ? trim($_GET['query']) : '';
    
    // 檢查是否有提供查詢參數
    if (!empty($query)) {
        // 模擬查詢數據（在實際應用中，你可能從資料庫中檢索數據）
        $data = [
            ['id' => 1, 'name' => 'Apple', 'description' => 'A red fruit'],
            ['id' => 2, 'name' => 'Banana', 'description' => 'A yellow fruit'],
            ['id' => 3, 'name' => 'Cherry', 'description' => 'A small red fruit'],
        ];

        // 根據查詢過濾數據
        $results = array_filter($data, function ($item) use ($query) {
            return stripos($item['name'], $query) !== false;
        });

        // 返回過濾後的數據
        echo json_encode([
            'success' => true,
            'query' => $query,
            'results' => array_values($results), // 確保數組鍵從 0 開始
        ]);
    } else {
        // 如果沒有查詢參數，返回錯誤消息
        echo json_encode([
            'success' => false,
            'message' => '未提供有效的查詢參數。',
        ]);
    }
} else {
    // 非 GET 請求返回錯誤
    echo json_encode([
        'success' => false,
        'message' => '請使用 GET 方法訪問此端點。',
    ]);
}
?>