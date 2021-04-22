$(document).ready(function(){
    $('input[type="text"]').keyup(function () {
      var val1 = parseInt($('.value1').val());
              if(val1 > 1){
                  var sum = val1/6+"/50";
              }else{
                val1 = 0;
                sum = val1+"/50";
              }
              $("input#resul").val(sum);
    });
    });
    $(document).ready(function(){
    $('input[type="text"]').keyup(function () {
      var val3 = parseInt($('.value3').val());
      var val4 = parseInt($('.value4').val());
      var val5 = parseInt($('.value5').val());
      var val6 = parseInt($('.value6').val());
      var val7 = parseInt($('.value7').val());
      var val8 = parseInt($('.value8').val());
                let i = 50
              if( val3 === i ){
                  var sum3 = 50+"/50"
              }else{
                  if(val3 < i){
                  var sum3 = val3+"/50"
                }}
    
              if( val4 === i ){
                  var sum4 = 50+"/50"
              }else{
                  if(val4 < i){
                  var sum4 = val4+"/50"
              }}
    
              if( val5 === i ){
                  var sum5 = 50+"/50"
              }else{
                  if(val5 < i){
                  var sum5 = val5+"/50"
              }}
    
              if( val6 === i ){
                  var sum6 = 50+"/50"
              }else{
                  if(val6 < i){
                  var sum6 = val6+"/50"
              }}
    
              if( val7 === i ){
                  var sum7 = 50+"/50"
              }else{
                  if(val7 < i){
                  var sum7 = val7+"/50"
              }}
    
              if( val8 === i ){
                  var sum8 = 50+"/50"
              }else{
                  if(val8 < i){
                  var sum8 = val8+"/50"
                 }
                }

                  sum0 = "النتيجة"
                  if(sum0 = val3+val4+val5+val6+val7+val8 >= 1){
                      sum0 = val3+val4+val5+val6+val7+val8
                      sum0 = " النتيجة"
                  }else{
                    sum0 = "النتيجة"
                        val3 = 0
                        val4 = 0
                        val5 = 0
                        val6 = 0
                        val7 = 0
                        val8 = 0
                  }

                  if(sum0 === sum0){
                    sum0 = val3+val4+val5+val6+val7+val8
                }
                if(sum0 == 0){
                    sum0 = " الرجاء اكمال الفراغات"
                }

              $("input#resut").val(sum3);
              $("input#resut2").val(sum4);
              $("input#resut3").val(sum5);
              $("input#resut4").val(sum6);
              $("input#resut5").val(sum7);
              $("input#resut6").val(sum8);
              $("input#resut7").val(sum0);
              
    });
    });
    $(document).ready(function(){
    $('input[type="text"]').keyup(function () {
      var val9 = parseInt($('.value9').val());
      var vala = parseInt($('.valuea').val());
      var valb = parseInt($('.valueb').val());
      var valc = parseInt($('.valuec').val());
      var vald = parseInt($('.valued').val());
                let l = 10
              if( val9 === l ){
                  var sum4 = l+"/10"
              }else{
                  if(val9 < l){
                  var sum4 = val9+"/10"
              }
              if(val9 < 1){
                sum4 = val9;
              }
            }
    
            if( vala === l ){
                  var suma = l+"/10"
              }else{
                  if(vala < l){
                  var suma = vala+"/10"
              }
              if(vala < 1){
                suma = vala;
              }
            }
    
            if( valb === l ){
                  var sumb = l+"/10"
              }else{
                  if(valb < l){
                  var sumb = valb+"/10"
              }
              if(valb < 1){
                sumb = valb
              }
            }
            if( valc === l ){
                  var sumc = l+"/10"
              }else{
                  if(valc < l){
                  var sumc = valc+"/10"
              }
              if(valc < 1){
                sumc = valc;
              }
            }
            if( vald === l ){
                  var sumd = l+"/10"
              }else{
                  if(vald < l){
                  var sumd = vald+"/10"
              }
              if(vald < 1){
                sumd = vald;
              }
            }

            sume = val9+vala+valb+valc+vald;

            if(sume = val9+vala+valb+valc+vald >= 1){
                sume = val9+vala+valb+valc+vald
            }else{
                sume = " الرجاء اكمال الفراغات"
            } 

            if(sume === val9+vala+valb+valc+vald){
                sume = val9+vala+valb+valc+vald
          }
          if(sume == 0){
            sume = " الرجاء اكمال الفراغات"
          }
              $("input#resutl").val(sum4);
              $("input#resuta").val(suma);
              $("input#resutb").val(sumb);
              $("input#resutc").val(sumc);
              $("input#resutd").val(sumd);
              $("input#resute").val(sume);
    
    });
    });
    $(document).ready(function(){
    $('input[type="text"]').keyup(function () {
        var val1 = parseInt($('.value1').val());
        var val2 = parseInt($('.value2').val());
                if(val1 >= 1){
                var sum = val1/6;
                }else{
                    val1 = 0;
                    var sum = val1/6;
                }
                if(val2 >= 1){
                    var sum1 = val2 + sum;
                    var sum2 = sum1/2+"/50";
                    }else{
                        val1 = 0;
                        val2 = 0;
                        var sum1 = val2 + sum;
                    }
            if(val2 === 0){
                var sum2 = 0+"/50"
            }


            $("input#resu").val(sum2);
    });
    });
        function pr() {
          document.getElementById("result").innerHTML = " الاسم : " + document.getElementById('name').value+ "الصف :" + document.getElementById('lname').value +" الدرجة: " + document.getElementById('resu').value;
        }


        

        
        
      





        


        