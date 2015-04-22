<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/stylelogeo.css">
	<title>Inicio de la pagina</title>
</head>
<body>

	<div class="container">
    <section id="content">
        <form action="" method="post" class="login">
            <h1>Entrar</h1>
            <div>
                <input name="user" type="text" placeholder="Username" id="username" pattern="^[A-Za-zñ,í,á,é,ó,ú,Á,É,Í,Ó,Ú,Ñ]{8}$" title="El Usuario debe de contener 8 caracteres." required />
            </div>
            <div>
                <input type="password" name="password" type="password" placeholder="Password" id="password" pattern="^[A-Za-zñ,í,á,é,ó,ú,Á,É,Í,Ó,Ú,Ñ]{6}[0-9]{2}$" title="La Contrase&ntilde;a debe contener 6 caracteres y al final 2 N&uacute;meros. Ej: contra22" required />
            </div>
            <div class="div2s">
                <input name="login" type="submit" value="login" />
                <input type="reset" id="login" value="Reset" />
            </div>
        </form><!-- form -->
        <form action="" method="post" class="login">
            <h1>Registrate</h1>
            <div>
                <input name="user" type="text" placeholder="Username" id="username" pattern="^[A-Za-zñ,í,á,é,ó,ú,Á,É,Í,Ó,Ú,Ñ]{8}$" title="El Usuario debe de contener 8 caracteres." required />
            </div>
            <div>
                <input type="password" name="password" type="password" placeholder="Password" id="password" pattern="^[A-Za-zñ,í,á,é,ó,ú,Á,É,Í,Ó,Ú,Ñ]{6}[0-9]{2}$" title="La Contrase&ntilde;a debe contener 6 caracteres y al final 2 N&uacute;meros. Ej: contra22" required />
            </div>
            <div class="div2s">
                <input name="login" type="submit" value="login" />
                <input type="reset" id="login" value="Reset" />
            </div>
        </form><!-- form -->
    </section><!-- content -->
</div><!-- container -->


</body>
</html>