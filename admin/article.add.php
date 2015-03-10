<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <title>add article</title>
<style>
    body {
        margin-left: 0px;
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 0px;
    }
    .font1{
        font-family: Arial,'Microsoft YaHei';
        font-weight: bolder;
    }
</style>
    <link href="../css/main.css" rel="stylesheet" type="text/css" />
</head>
<body style="background-color: azure;>

<div style="width: 100%;height: 100%;border: firebrick;">
    <h1 style="color: #0083e8">WebLog内容管理系统</h1>
    <h3><a href="article.add.php" class="font1" ">添加文章</a> </h3>
    <h3><a href="article.manager.php" class="font1" ">文章列表</a> </h3>
</div>
<div style="background-color: bisque" >
    <form id="add" name="add" method="post" action="article.add.handle.php">
        <fieldset style="color: #0083e8;border: solid">
            <h3>发布文章</h3>
            <h4>标题</h4>
            <input type="text" name="title" id="title" />
            <label for="author"><h4>作者</h4></label>
            <input type="text" name="author" id="author" />
            <h4>摘要</h4>
            <textarea cols="60" rows="5" name="description" id="description"></textarea>
            <h4>正文</h4>
            <textarea cols="60" rows="30" name="content" id="content" ></textarea>
            <input type="submit" name="submit" id="submit" value="提交">

        </fieldset>
    </form>
</div>
<div>
    <footer>
        <h4 style="border: thick;font-weight: bolder;font-family: Sendnya">
            Designed By <a href="mailto:zhangway19921221@163.com" >ZhangWei</a>
            <address>ZheJiang University,HangZhou,<br>ZheJiang Province,China.</address>
        </h4>
    </footer>
</div>
<hr style="border: dashed;font-weight: bolder;color: #0083e8">
</body>

</html>