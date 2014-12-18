<div class="hidden-form">
    <header>
        <h2>Добавление проекта</h2>
        <div class="close"></div>
    </header>
    <form method="" action=""> 
        <label>Название проекта</label>
        <input name="projectname" required tabindex="1"
               onblur="this.placeholder = (this.placeholder === '') ? this.title : this.placeholder;"
               onfocus="this.placeholder = (this.placeholder === this.title) ? '' : this.placeholder;"
               placeholder="Введите название"
               title="Введите название"
               type="text"
               >
        <label>Картинка проекта</label>
        <input name="projectimg" required tabindex="2"
               onblur="this.placeholder = (this.placeholder === '') ? this.title : this.placeholder;"
               onfocus="this.placeholder = (this.placeholder === this.title) ? '' : this.placeholder;"
               placeholder="Загрузите изображения"
               title="Загрузите изображения"
               type="text"
               >
        <label>URL проекта</label>
        <div class="add-url clearfix">
            <input name="projecturl" required tabindex="3"
                   onblur="this.placeholder = (this.placeholder === '') ? this.title : this.placeholder;"
                   onfocus="this.placeholder = (this.placeholder === this.title) ? '' : this.placeholder;"
                   placeholder="Добавте ссылку"
                   title="Добавте ссылку"
                   type="text"
                   >
            <div class="cloud"></div>
        </div>
        <label>Описание</label>
        <textarea name="projectdiscription" required tabindex="4" 
                  onblur="this.placeholder = (this.placeholder === '') ? this.title : this.placeholder;"
                  onfocus="this.placeholder = (this.placeholder === this.title) ? '' : this.placeholder;"
                  placeholder="Пара слов о вашем проекте"
                  title="Пара слов о вашем проекте"
                  ></textarea>
        <input type="submit">
    </form>

</div>
<div class="hidden-background"></div>

<div class="right-block clearfix">
    <div class="recent-works clearfix">
        <div><h2>Мои работы</h2></div>
        <div class="projects">
            <ul>
                <li class="project-done"><a href="#">
                        <div class="view view-second">
                            <img src="img/site1prt_sc.jpg" alt="site1">
                            <div class="mask"></div>
                            <div class="content">
                                <h3>название</h3>
                            </div>
                        </div>
                        <p>www.site.ua</p>
                    </a>
                    <p>Информация о проекте 1 превью 2 строки...</p>
                </li>
                <li class="project-done"><a href="#">
                        <div class="view view-second">
                            <img src="img/site2.jpg" alt="site2">
                            <div class="mask"></div>
                            <div class="content">
                                <h3>название</h3>
                            </div>
                        </div>
                        <p>www.site.ua</p>
                    </a>
                    <p>Информация о проекте 1 превью 2 строки...</p>
                </li>
                <li class="project-done"><a href="#">
                        <div class="view view-second">
                            <img src="img/site3.jpg" alt="site3">
                            <div class="mask"></div>
                            <div class="content">
                                <h3>название</h3>
                            </div>
                        </div>
                        <p>www.site.ua</p>
                    </a>
                    <p>Информация о проекте 1 превью 2 строки...</p>
                </li>
                <li class="project-done"><a href="#">
                        <div class="view view-second">
                            <img src="img/site4.jpg" alt="site4">
                            <div class="mask"></div>
                            <div class="content">
                                <h3>название</h3>
                            </div>
                        </div>
                        <p>www.site.ua</p>
                    </a>
                    <p>Информация о проекте 1 превью 2 строки...</p>
                </li>
                <li class="add-project">
                    <p>Добавить проект</p>
                </li>
            </ul>
        </div>
    </div>

</div>