<script type="text/javascript">

function formSubmit(f) {

    // 업로드 할 수 있는 파일 확장자를 제한합니다.

        var extArray = new Array('hwp','xls','doc','xlsx','docx','pdf','jpg','gif','png','txt','ppt','pptx');

        var path = document.getElementById("upfile").value;

        if(path == "") {

                alert("파일을 선택해 주세요.");

                return false;

        }



        var pos = path.indexOf(".");

        if(pos < 0) {

                alert("확장자가 없는파일 입니다.");

                return false;

        }



        var ext = path.slice(path.indexOf(".") + 1).toLowerCase();

        var checkExt = false

        //for(var i = 0; i < extArray.length; i++) {

             //   if(ext == extArray[i]) {

                //        checkExt = true;

               //         break;

//}

      //  }

      //  return true;

//}

</script>

<style>
        #btn1{
                border-top-left-radius: 5px;
                border-bottom-left-radius: 5px;
                border-top-right-radius: 5px;
                border-bottom-right-radius: 5px;
                margin-right:-4px;
                padding:5px;
        }
        #btn2{
                border-top-left-radius: 5px;
                border-bottom-left-radius: 5px;
                border-top-right-radius: 5px;
                border-bottom-right-radius: 5px;
                margin-left:-3px;
                color: #6495ED;
                border: 3px solid #6495ED;
                padding: 5px;
        }
        #hr{
                height: 2px;
                background: #bbb;
                background-image: -webkit-linear-gradient(left, #eee, #777, #eee);
                background-image: -moz-linear-gradient(left, #eee, #777, #eee);
                background-image: -ms-linear-gradient(left, #eee, #777, #eee);
                background-image: -o-linear-gradient(left, #eee, #777, #eee);
        }
</style>

<div style="text-align: center; position: absolute; top:300px; left: 40%;" >
<form name="uploadForm" id="uploadForm" method="post" action="upload_process.php"

      enctype="multipart/form-data" onsubmit="return formSubmit(this);">

    <div>
        <img src="./image/koren_image.jfif" alt="My Image" style="width: 50%; height: auto;"> </p>
        <label for="upfile" style="font-size: 30px; color: #6495ED; font-style: italic;" >첨부파일을 넣어주세요.
        </label>
        </p>
        </p>
        <hr style="border: solid 2px grey;">
        </p>
        </p>
        <input id="btn1" type="file" name="upfile" id="upfile" color="blue" />
        </p>
        <input id="btn2"  type="submit" value="upload" />
    </div>

</form>
</div>
