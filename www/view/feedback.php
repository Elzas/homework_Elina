
<div class="right-block clearfix">
    <div class="feedback-form">
        <header>
            <h2>У вас интересный проект? Напишите мне</h2>
        </header>

        <div class="cover">
            <form id="contactform" method="POST" action="<?= BASE. '/model/mod_post.php' ?>">
                <div class="clearfix">
                    <div class="name">
                        <label for="name">Имя</label> 
                        <input name="name" required tabindex="1"
                               onblur="this.placeholder = (this.placeholder === '') ? this.title : this.placeholder;"
                               onfocus="this.placeholder = (this.placeholder === this.title) ? '' : this.placeholder;"
                               placeholder="Как к Вам обращаться"
                               title="Как к Вам обращаться"
                               type="text"
                               >
                    </div>
                    <div class="email">
                        <label for="email">Email</label> 
                   
                        <input name="email" required tabindex="2"
                               onblur="this.placeholder = (this.placeholder === '') ? this.title : this.placeholder;"
                               onfocus="this.placeholder = (this.placeholder === this.title) ? '' : this.placeholder;"
                               placeholder="Куда мне писать"
                               title="Куда мне писать"
                               type="email"
                               >
                    </div>
                </div>
                <label for="message" class="message">Сообщение</label>
                <textarea name="message" required tabindex="3" 
                          onblur="this.placeholder = (this.placeholder === '') ? this.title : this.placeholder;"
                          onfocus="this.placeholder = (this.placeholder === this.title) ? '' : this.placeholder;"
                          placeholder="Кратко в чем суть"
                          title="Кратко в чем суть"
                          ></textarea>

                <div class="clearfix">
                    <label>Введите код, указанный на картинке</label>

                    <div class="pic-generate">
                        <img src="/captcha" alt="captcha">

                        <br>

                    </div>
                    <input name="captcha"  maxlength="4" required tabindex="4"
                           onblur="this.placeholder = (this.placeholder === '') ? this.title : this.placeholder;"
                           onfocus="this.placeholder = (this.placeholder === this.title) ? '' : this.placeholder;"
                           placeholder="Введите код"
                           title="Введите код"
                           type="text"
                           >
                </div>
                
                <!--<div><? print_r($_SESSION['cap']); ?></div>-->

                <div class="clearfix">
                    <input name="submit" id="submit" tabindex="5" value="Отправить" type="submit"> 	 
                    <input name="clear" id="clear" tabindex="6" value="Очистить" type="submit">
                </div>                            
        </div>                            
        </form> 
    </div>

</div>
