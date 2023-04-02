<head>
        <link rel="stylesheet" href="style.css">
</head> 
<body> 
        
<?php
if (!empty($messages)) {
  print('<div id="messages">');
  // Выводим все сообщения.
  foreach ($messages as $message) {
    print($message);
  }
  print('</div>');
}
?>

<form action="" class="forma" method="POST">
    <label>
        Имя:<br>
        <input id="data" name="name" placeholder="Введите Ваше имя" <?php if ($errors['name']) {print 'class="error"';} ?> value="<?php print $values['name']; ?>" >
    </label><br>
    <label>
        Email:<br>
        <input id="data" name="email" type="email" placeholder="Введите вашу почту" <?php if ($errors['email']) {print 'class="error"';} ?> value="<?php print $values['email']; ?>" >
    </label><br>
    <label>
        Дата рождения:<br>
         <select id="data" name="birth_date" <?php if ($errors['birth_date']) {print 'class="error"';} ?> >
         <?php  
                 $birthdate=$values['birth_date'];
                 if ($values['birth_date']=='') {
                         for ($i = 1922; $i <= 2022; $i++) {
                            printf('<option value="%d">%d год</option>', $i, $i);
                         }
                 }
                 else {
                         printf('<option value="%d">%d год</option>', $birthdate, $birthdate);
                         for ($i = 1922; $i <= 2022; $i++) {
                            printf('<option value="%d">%d год</option>', $i, $i);
                         }
                 }
         ?>
        </select>
    </label><br>
          
    Пол:<br>
        <div <?php if ($errors['sex']) {print 'class="error"';} ?> >
        <?php
                if ($values['sex']=='') {
                           print ('<label><input id="data" type="radio" name="sex" value="ж">Ж</label> 
                           <label><input id="data" type="radio" name="sex" value="м">М</label><br>');
                }
                else {
                        if ($values['sex']=='м') {
                                print ('<label><input id="data" type="radio" name="sex" value="ж">Ж</label> 
                                <label><input id="data" type="radio" name="sex" value="м" checked="checked">М</label><br>');
                        }
                        else {
                                print ('<label><input id="data" type="radio" name="sex" value="ж" checked="checked">Ж</label> 
                                <label><input id="data" type="radio" name="sex" value="м">М</label><br>');
                        }
                }
     
        ?>
        </div>
        
    Количество конечностей:<br />
        <div <?php if ($errors['amount_of_limbs']) {print 'class="error"';} ?> >
                <?php
                if ($values['amount_of_limbs']=='') {
                        print ('<label><input id="data" type="radio" name="amount_of_limbs" value="2"> 2 </label>
                        <label><input id="data" type="radio" name="amount_of_limbs" value="3"> 3 </label>
                        <label><input id="data" type="radio" name="amount_of_limbs" value="4"> 4 </label><br>');
                }
                else {
                        if ($values['amount_of_limbs']=='2') {
                               print ('<label><input id="data" type="radio" name="amount_of_limbs" checked="checked" value="2"> 2 </label>
                               <label><input id="data" type="radio" name="amount_of_limbs" value="3"> 3 </label>
                               <label><input id="data" type="radio" name="amount_of_limbs" value="4"> 4 </label><br>');
                        }
                        else if ($values['amount_of_limbs']=='3') {
                               print ('<label><input id="data" type="radio" name="amount_of_limbs" value="2"> 2 </label>
                               <label><input id="data" type="radio" name="amount_of_limbs" checked="checked" value="3"> 3 </label>
                               <label><input id="data" type="radio" name="amount_of_limbs" value="4"> 4 </label><br>');
                        }
                        else {
                               print ('<label><input id="data" type="radio" name="amount_of_limbs" value="2"> 2 </label>
                               <label><input id="data" type="radio" name="amount_of_limbs" value="3"> 3 </label>
                               <label><input id="data" type="radio" name="amount_of_limbs" checked="checked" value="4"> 4 </label><br>');
                        }
                } 
                ?>
        </div>
        
    <label>
        Сверхспособности:<br>
        <select id="data" name="abilities[]" multiple="multiple" <?php if ($errors['abilities']) {print 'class="error"';} ?> >
                <?php
                if (empty($values['abilities'])) {
                        print ('<option value="Бессмертие">Бессмертие</option>
                        <option value="Прохождение сквозь стены">Прохождение сквозь стены</option>
                        <option value="Левитация">Левитация</option>');
                }
                else {
                        foreach ($values['abilities'] as $ability) {
                                
                                /*if ($ability=='Бессмертие') {
                                        print('<option value="Бессмертие" selected="selected">Бессмертие</option>
                                        <option value="Прохождение сквозь стены">Прохождение сквозь стены</option>
                                        <option value="Левитация">Левитация</option>');
                                }
                                if ($ability=='Прохождение сквозь стены') {
                                        print('<option value="Бессмертие">Бессмертие</option>
                                        <option value="Прохождение сквозь стены" selected="selected">Прохождение сквозь стены</option>
                                        <option value="Левитация">Левитация</option>');
                                }
                                if ($ability=='Левитация') {
                                        print('<option value="Бессмертие">Бессмертие</option>
                                        <option value="Прохождение сквозь стены">Прохождение сквозь стены</option>
                                        <option value="Левитация" selected="selected">Левитация</option>');
                                }*/
                        }
                    //<option value="Бессмертие">Бессмертие</option>
                    //<option value="Прохождение сквозь стены">Прохождение сквозь стены</option>
                    //<option value="Левитация">Левитация</option>
                }
                ?>
        </select>
    </label><br>
    <label>
        Биография:<br />
        <textarea id="data" name="biography" placeholder="Введите текст"></textarea>
    </label><br>
    <label><input id="data" type="checkbox" name="informed">С контрактом ознакомлен(а)</label><br>
    <input id="sub" type="submit" value="Отправить">
  </form>
</body>
