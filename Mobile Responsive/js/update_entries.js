/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


    function checkCorrect(){
                    var x = document.getElementsByName("grade_choice");
                    var y = document.getElementsByName("grading");
                    
                  for(i = 0; i < x.length; i++) { 
                    s
                      if(x[i].value == "Correct") {
                        y.style.display = "none";
                      }
                      
                     
                  } 
                }
                
                function checkWrong(){
                    var x = document.getElementsByName("grade_choice");
                    var y = document.getElementsByClassName("grading");
                    
                  for(i = 0; i < x.length; i++) { 
                    
                       if(x[i].value == "Wrong")
                      {
                       y.style.display = "block";
                       document.getElementById("db_grade").value = null
                       
                      }
                     
                  } 
                }
                 function openGrade(){
                         var x = document.getElementById("id1").value;
                             if (x == "Dust") 
                                 {
                                document.getElementById("grade_list").style.display = "block";
                                  document.getElementById("dust_grade").style.display = "block";
                                  document.getElementById("broken_leaf_grade").style.display = "none";
                                  document.getElementById("fannings_grade").style.display = "none";
                              }
                              else if(x=="Broken Leaf"){
                                 document.getElementById("grade_list").style.display = "block";
                                  document.getElementById("broken_leaf_grade").style.display = "block";
                                  document.getElementById("dust_grade").style.display = "none";
                                  document.getElementById("fannings_grade").style.display = "none";
                              }
                             else if(x == "Fannings"){
                                 document.getElementById("grade_list").style.display = "block";
                                  document.getElementById("fannings_grade").style.display = "block";
                                  document.getElementById("dust_grade").style.display = "none";
                                  document.getElementById("broken_leaf_grade").style.display = "none";
                             }
                        }
                          function call_Shortage(){
            var no1 = parseInt(document.getElementById("no_bag_1").value);
            var short = 0;
            var total =0;
            short = parseInt(document.getElementById("shortage").value);
            var kg_bag = parseInt(document.getElementById("kg_bag").value);
           
                total = (no1 * kg_bag) - short;
                f_no_bag = total/kg_bag;
           
           

            
            document.getElementById("total").value = total;
            document.getElementById("no_bag").value = f_no_bag.toFixed(2);
            
        }