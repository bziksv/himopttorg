<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
CModule::IncludeModule('iblock');
?>
    <p>0. Кладем этот файл в корень сайта.</p>
    <p>1. Отправить запрос и скопировать полученный код куки.</p>
    <form action="http://<?=$_SERVER['HTTP_HOST']?>/bitrix/admin/1c_exchange.php?type=catalog&mode=checkauth" method="post" enctype="multipart/form-data">
        <input type="submit">
    </form>
    <p>2.1. Вставить код куки в текстовое поле.</p>
    <p>2.2. Загрузить выгрузку в архиве в папку /upload/1c_catalog/</p>
    <p>2.3. Вставить название архива (с расширением) в поле Filename</p>
    <p>2.4. Отправлять на сервер один и тотже запрос пока не получим ответ success.</p>
    <form action="http://<?=$_SERVER['HTTP_HOST']?>/bitrix/admin/1c_exchange.php" method="get" enctype="multipart/form-data" id="1cForm">
        <input type="hidden" name="type" value="catalog">
        <input type="hidden" name="mode" value="import">
        Filename: <input type="text" name="filename" value="import.xml"><br />
        Cookie: <input type="text" name="Cookie" value="">
        <br />

        <input type="submit">
    </form>

    <script type="text/javascript" src="http://malsup.github.com/jquery.form.js"></script>
    <script type="text/javascript">
        $(function(){
            $(document).ready(function() {
                var options = {
                    beforeSubmit:  showRequest,
                    success:       showResponse
                };

                $('#1cForm').ajaxForm(options);
            });
            function showRequest(formData, jqForm, options)
            {

                $('#out').append("<div id='remove'>Отправлен запрос...</div>");
                return true;
            }
            function showResponse(responseText, statusText, xhr, $form)  {
                if (responseText.indexOf('success') == -1)
                {
                    $('#remove').remove();
                    $('#out').append('<div style="color:red;">'+responseText+'</div>');
                    $('#1cForm').submit();
                }
                else
                {
                    $('#out').append('<div style="color:green;">'+responseText+'</div>');
                }
            }
        });
    </script>
    <div id="out"></div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>