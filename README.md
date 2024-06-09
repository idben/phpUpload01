# 圖片上傳及標籤的整理

## 專案摘要

1. 多圖上傳進入共用欄位的資料整理，使用陣列格式
2. 表單有用 javascript 做好即使 tag 的切割
3. 表單中的標籤輸入欄位是為了要切割整理用
4. 整理好的 tag 存在變數 tags 中，格式為陣列，並即時 JSON.stringify，再置放在隱藏的欄位中。
5. php 檔中是抓隱藏的標籤欄位來進入資料庫
6. 其他寫入的部份請照上課的老師教的做，這個範例只是講述如何整理資料


## 操作
1. 建立專案資料夾後
2. 開啟終端機或命令提示字元
3. 不要 git init
4. 貼上以下指令，就可以直接在專案資料夾下下載專案，不會再多一層 
```bash
git clone git@github.com:idben/phpUpload01.git .
```

## 操作圖示
![操作圖示](https://github.com/idben/phpUpload01/blob/main/images/info1.png)

## 結果圖示
![結果圖示](https://github.com/idben/phpUpload01/blob/main/images/info2.png)

## 示範網址
[https://sagedaben.com/iSpan/phpTest/upload01/](https://sagedaben.com/iSpan/phpTest/upload01/)