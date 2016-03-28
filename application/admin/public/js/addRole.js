/**
 * Created by CHAN on 2016/2/19.
 */

window.onload = function(){
    var OaddRoleButton = document.getElementById('addRole_button');
    var OaddRoleSelectDiv = document.getElementById('addRole_select_div');
    //var OaddRoleSelect = document.getElementById('addRole_select');
    var OaddRoleSelect = document.getElementsByName('addRole_select');


    //var html = OaddRoleSelectDiv.innerHTML;
    OaddRoleButton.onclick = function(){
      /*  var lastSelect = OaddRoleSelect[OaddRoleSelect.length-1];
        if(isSelected(lastSelect)){
            var html = "<span name='addRole_select_span'>"+ oSpan[oSpan.length-1].innerHTML+"</span>";
            OaddRoleSelectDiv.innerHTML += html;
            removeOption(OaddRoleSelect[OaddRoleSelect.length-1]);
        }else {
            alert('请先选择，再添加');
        }*/
        //var html = OaddRoleSelectDiv.getElementsByName('addRole_select');
       OaddRoleSelectDiv.innerHTML += html;
        var lastSelect = OaddRoleSelect[OaddRoleSelect.length-1];
        length = lastSelect.length-1;
        console.log(length);
        for(var i=0; i<length; i++){
            if(lastSelect[i].selected == true){
                console.log(lastSelect[i]);
                lastSelect[i] =null;

                break;
            }
            //console.log(lastSelect[i].);

        }


        //OaddRoleSelectDiv.appendChild(newSelect);

        //console.log(lastSelect);



    };

  /*  function isSelected(oSelect){
        var isSelected = false;
        var html = '';
        for(var i=0;oSelect.options.length-1;i++ ){
            if(oSelect[i].selected == true){
                isSelected = true;
                break;
            }
        }
        return isSelected;
    }*/

   function removeOption(oSelect){
       alert(oSelect.options.length);
        var length = oSelect.options.length-1;
        for(var i=1; i<length; i++){
            if(oSelect[i].selected == true){
                console.log(oSelect.options[i]);
                oSelect.options[i] = null;
                break;
            }

        }
       //return oSelect;
    }



 }
