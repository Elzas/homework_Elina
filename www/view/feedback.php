            <div class="right-block clearfix">
                <div id="feedback-form">
                    <header>
                        <h2>У вас интересный проект? Напишите мне</h2>
                    </header>

                    <div class="cover">
                        <form id="contactform">
                            <div class="clearfix">
                                <div class="name">
                                    <label>Имя</label> <br>
                                    <input name="name" required tabindex="1"
                                           onblur="this.placeholder = (this.placeholder === '') ? this.title : this.placeholder;"
                                           onfocus="this.placeholder = (this.placeholder === this.title) ? '' : this.placeholder;"
                                           placeholder="Как к Вам обращаться"
                                           title="Как к Вам обращаться"
                                           type="text"
                                           >
                                </div>
                                <div class="email">
                                    <label>Email</label> <br>
                                    <input name="email" required tabindex="2"
                                           onblur="this.placeholder = (this.placeholder === '') ? this.title : this.placeholder;"
                                           onfocus="this.placeholder = (this.placeholder === this.title) ? '' : this.placeholder;"
                                           placeholder="Куда мне писать"
                                           title="Куда мне писать"
                                           type="text"
                                           >
                                </div>
                            </div>

                            <label class="message">Сообщение</label>
                            <textarea name="comment" required tabindex="3" 
                                      onblur="this.placeholder = (this.placeholder === '') ? this.title : this.placeholder;"
                                      onfocus="this.placeholder = (this.placeholder === this.title) ? '' : this.placeholder;"
                                      placeholder="Кратко в чем суть"
                                      title="Кратко в чем суть"
                                      ></textarea>

                            <div class="clearfix">
                                <label>Введите код, указанный на картинке</label>
                                <div class="pic-generate">
                                    <img src="/captcha"><br>
                                </div>
                                <input name="capcha" required tabindex="4"
                                       onblur="this.placeholder = (this.placeholder === '') ? this.title : this.placeholder;"
                                       onfocus="this.placeholder = (this.placeholder === this.title) ? '' : this.placeholder;"
                                       placeholder="Введите код"
                                       title="Введите код"
                                       type="text"
                                       >
                            </div>
                            <div class="clearfix">
                                <input name="submit" id="submit" tabindex="5" value="Отправить" type="submit"> 	 
                                <input name="clear" id="clear" tabindex="6" value="Очистить" type="submit">
                            </div>                            
                    </div>                            
                    </form> 
                </div>

            </div>
