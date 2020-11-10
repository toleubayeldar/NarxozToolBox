<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eldar Toleubay</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="html/menu.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" rel="stylesheet">

</head>

<body>
 
  
  
  <header class="menu">
        <div class="menu-wrap">
            <img src="https://thumb.tildacdn.com/tild3638-3130-4437-b432-643037613965/-/resize/200x/-/format/webp/black_white-38.png" class="logo-img" alt="Logo">
            <input type="checkbox" id="checkbox">
            <nav>
                <ul>
                     <li><a href="html/calculator.html">Басты бет</a></li>
                    <li><a href="../test.php">Қоырытнды балл</a></li>
                    <li><a href="#">Онлайн кітапхана</a></li>
                    <li><a href="#">Байланыс</a></li>
                </ul>
            </nav>
            <label for="checkbox">
                <i class="fa fa-bars menu-icon"></i>
            </label>
        </div>
    </header>
  
  
  
  

  
  <section>
  <div class="openSpace">
      
  </div>
  <div class="all_content">
   <div class="content">
  
    <form method="post">
       <h1 class="itemContent">Қорытынды бағаны анықтау</h1>
        <div class="inputFirst">
           
            <input type="text" placeholder="1 ВСК" name="1vsk">
            
            <input type="text" placeholder="2 ВСК" name="2vsk">
            <input type="text" placeholder="Экзамен" name="exam" class="exam">
            <p><input type="submit" value="Анықтау" class="bottom" class="submit" name="nazvanie_knopki"></p>
        </div>
               
    </form> 
    <br>
    <br>
    <br>
    <br>
<?php
    
    if( isset( $_REQUEST['nazvanie_knopki'] ) )
    {
        $vsk1 = $_REQUEST["1vsk"];
        $vsk2 = $_REQUEST["2vsk"];
        $exam = $_REQUEST["exam"];
        $sum = ((($vsk1+$vsk2)/2)*0.4)+(($exam)*0.6);
        echo "<h1>Қорытынды балл: $sum</h1>";
    }
       
?> 
    
   </div>
  <div class="betwen">
      
  </div>
   <div class="help">
   <details class="helpBox"> 
   
   
   <summary class="firstHelp"><h1 class="titleHelp"><div class="itemHelp">Видео материалдар</div></h1></summary>
   
   
    <details class="titleHelpIn" id="red"> 
   <summary><h1 class="helper">Ақпараттық жүйелер</h1></summary>
    Текст спойлера 
    </details>
    
    
    </details>
    
    
    
    
    <details class="helpBox"> 
   
   
   <summary class="firstHelp"><h1 class="titleHelp"><div class="itemHelp">Пайдалы сілтемелер</div></h1></summary>
   
   
    <details class="titleHelpIn" id="red"> 
   <summary><h1 class="helper">Ақпараттық жүйелер</h1></summary>
    Текст спойлера 
    </details>
    
    
    </details>
    
    
    
    
    <details class="helpBox"> 
   
   
   <summary class="firstHelp"><h1 class="titleHelp"><div class="itemHelp">Студенттер форумы</div></h1></summary>
   
   
    <details class="titleHelpIn" id="red"> 
   <summary><h1 class="helper">Ақпараттық жүйелер</h1></summary>
    Текст спойлера 
    </details>
    
    
    </details>
    
    
    
    
    
    
   </div>
   
  </div>
    </section>
</body></html>

   

