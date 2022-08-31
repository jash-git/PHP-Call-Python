PHP程序運行Python腳本（接收數據及傳參）[PHP Call Python] [有原始碼]

資料來源: https://mp.weixin.qq.com/s/Dot_8Ej76VwS9Ft44C2nng




介紹一下，如何在php程序中運行Python腳本，在php中python程序的運行，主要依靠程序執行函數，這裡說一下三個相關函數：exec()，system() 和 passthru()。

這裡主要講 exec() 函數，介紹使用該函數傳遞參數，以及如何使用python返回josn數據供php使用。