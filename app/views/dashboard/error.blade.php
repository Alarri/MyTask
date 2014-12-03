
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Error</title>
	{{HTML::style('bootstrap/css/bootstrap.min.css')}}

	{{HTML::style('bootstrap/css/estiloserror.css')}}
</head>
<body>

	<br><br><br>
<div id="panel"class="row row-margin-bottom">
            <div class="col-md-5 no-padding lib-item" data-category="view">
                <div class="lib-panel">
                    <div class="row box-shadow">
                        <div class="col-md-6">
                            <img class="lib-img-show" src="http://static.commentcamarche.net/en.kioskea.net/faq/images/2347-error-logo-s-.png">
                        </div>
                        <div class="col-md-6">
                            <div class="lib-row lib-header">
                              <h2>Error Message</h2>
                                <div class="lib-header-seperator"></div>
                            </div>
                            <div class="lib-row lib-desc">
                                <ul>
		                		<p>The task trying to edit or delete the user does not match the current session.</p>
		                		<li>{{link_to("mostrartasks", 'Return', $attributes = array(), $secure = null);}}</li>
		                	</ul> 
		                </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </body>