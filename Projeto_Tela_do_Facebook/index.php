<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Facebook</title>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <header>
            <div class="center">
                <div class="logo">
                    <h2>Facebook</h2>
                </div><!--Center-->
                <form action="" class="form-login">
                    <div class="form-element">
                        <p>E-mail ou Telefone:</p>
                        <input type="email" placeholder="">
                    </div><!--Form-element-->
                    <div class="form-element">
                        <p>Senha:</p>
                        <input type="password" placeholder="">
                    </div><!--Form-element-->
                    <div class="form-element">
                        <input type="submit" value="Entrar" name="entrar">
                    </div><!--Form-element-->
                </form>
                <div class="clear"></div>
            </div>
        </header>
        <section class="main">
            <div class="center">
                <div class="img-conection">
                    <img src="assets/img/logo-conection.png" alt="Logo">
                </div><!--img-conection-->
                <div class="abrir-conta">
                    <h2>Abra uma conta </h2>
                    <h3>É rápido e fácil.</h3>
                    <form action="" class="criar-conta">
                        <div class="w50">
                            <input type="name" name="nome" placeholder="Nome"/>
                        </div><!--w50-->
                        <div class="w50">
                            <input type="name" name="sobrenome" placeholder="Sobrenome"/>
                        </div><!--w50-->
                        <div class="w100">
                            <input type="email" name="email" placeholder="E-mail"/>
                        </div><!--w100-->
                        <div class="w100">
                            <input type="password" name="senha" placeholder="Senha"/>
                        </div><!--w100-->
                        <div class="w100">
                            <h3>Data de Nascimento</h3>
                            <select name="nascimento-dia" class="nascimento">
                                <?php
                                    for($i = 1; $i <= 31; $i++){
                                ?>

                                <option value="<?php $i; ?>"><?php echo $i;?></option>
                                <?php }?>
                            </select>
                            <select name="nascimento-mes" class="nascimento">
                                <option value="0">Janeiro</option>
                                <option value="1">Fevereiro</option>
                                <option value="2">Março</option>
                                <option value="3">Abril</option>
                                <option value="4">Maio</option>
                                <option value="5">Junho</option>
                                <option value="6">Julho</option>
                                <option value="7">Agosto</option>
                                <option value="8">Setembro</option>
                                <option value="9">Outubro</option>
                                <option value="10">Novembro</option>
                                <option value="11">Dezembro</option>
                            </select>
                            <select name="nascimento-ano" class="nascimento">
                                <?php
                                    for($i = 1910; $i <= 2020; $i++){
                                ?>
                                <option value="<?php $i; ?>"><?php echo $i; ?></option>
                                <?php } ?>
                            </select>
                            <div class="clear"></div>
                        </div><!--w100-->
                        <div class="w100">
                            <div class="input-radio">
                                <input type="radio" name="sexo" value="Masculino">
                                <h3>Masculino</h3>
                            </div><!--Radio-->
                            <div class="input-radio">
                                <input type="radio" name="sexo" value="Feminino">
                                <h3>Feminino</h3>
                            </div><!--Radio-->
                            <div class="clear"></div>
                        </div><!--w100-->
                        <div class="w100">
                            <input type="submit" value="Cadastre-se"/>
                        </div><!--w100-->
                        <div class="clear"></div>
                    </form><!--criar-conta-->
                </div><!--abrir-conta-->
                <div class="clear"></div>
            </div><!--Center-->
        </section><!--main-->
        <section class="linguas">
            <div class="center">
                <a class="selected-lingua" href="">Português (BR)</a>
                <a href="">Português (BR)</a>
                <a href="">Português (BR)</a>
                <a href="">Português (BR)</a>
                <a href="">Português (BR)</a>
                <a href="">Português (BR)</a>

            </div>
        </section><!--Linguas-->
    </body>
</html>