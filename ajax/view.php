<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="//code.jquery.com/jquery.js"></script>
</head>

<body>
    <?php
        echo 'ajax';
    ?>
    <button id="btnLoad">LOAD</button>
    <div id="viewBox"></div>
    <script>
        $(document).ready(function () {
            $('#btnLoad').on('click', function(){
                if ( !$('p').length ) {
                    loadDoc();
                } else {
                    alert('aleady loading');
                }
            });
        });

        function loadDoc() {
            $.ajax({
                type: "GET",
                url: "doc.json",
                dataType: "json",
                cache: false,
                success: function (data) {

                    //arrView = [];

                    for (var i = 0; i < data.dataList.length; i++) {
                        str = '<p>' + data.dataList[i].num + ': ' + data.dataList[i].title + '</p>\n';
                        //arrView.push(str);
                        $("#viewBox").append(str);
                    }

                    //$("#viewBox").html(arrView);

                    // $.each(data.dataList, function (index) {
                    //     $('li').eq(index).html(data.dataList[index].val);
                    // });

                },
                error: function (info, xhr) {
                    if (info.readyState == '4') {
                        alert('문제가 발생했습니다.\n상태코드 : ' + info.status + '\n\n' + info.responseText);
                    } else {
                        alert('문제가 발생했습니다.\n잠시후 다시 시도해 주세요.\n 상태코드 : ' + info.status);
                    }
                },
                timeout: 3000
            });
        }
    </script>
</body>

</html>