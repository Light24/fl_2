</div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <p class="head-footer">&copy; Название сайта 2015.</p>
                <ul class="footer-ul">
                    <li><a href="/about">Правила сайта.</a>
                    </li>
                    <li><a href="/help">Помощь. </a>
                    </li>
                    <li><a href="/contact">Контакты</a>
                    </li>


                </ul>

            </div>

        </div>
    </div>



</footer>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <p class="modal-title" id="myModalLabel">Введите ваши данные</p>
            </div>
            <div class="modal-body">
                <form class="fixed form-modal" id="login_form" name="login_form" method="post" action="#">
                    <fieldset>
                        <div class="formstatusLogin"></div>
                        <div id="showSuccsLogin" class="alert success"><i class=""></i>
                        </div>
                        <div id="showErrLogin" class="alert error"><i class=""></i>
                        </div>
                        <input id="emailLogin"  class="styler" type="text" name="emailLogin" placeholder="Адрес электронной почты...">
                        <input id="passwordLogin"  class="styler" type="password" name="passwordLogin" value="" placeholder="Пароль...">
                    </fieldset>

                        <div class="social-block">
                            <p>или войдите через один из Ваших аккаунтов:</p>
                            <ul class="sc">
                                <li>
                                    <a href='/auth/vk'>
                                        <img class="soc-icons img-circle" alt="VK" src="/assets/default/img/vk.png">Вконтакте</a>
                                </li>
                                <li>
                                    <a href='/auth/fb'>
                                        <img class="soc-icons img-circle" alt="FB" src="/assets/default/img/fb.png">Facebook</a>
                                </li>
                                <li>
                                    <a href='/auth/tw'>
                                        <img class="soc-icons img-circle" alt="TW" src="/assets/default/img/tw.png">Twitter</a>
                                </li>
                                <li>
                                    <a href='/auth/in'>
                                        <img class="soc-icons img-circle" alt="IN" src="/assets/default/img/inst.png">Instagram</a>
                                </li>
                            </ul>
                        </div>


                </form>
            </div>
            <div class="modal-footer">
                <button id="btn-login" type="button" class="btn btn-enter2">Войти</button>
            </div>
        </div>
    </div>
</div>





