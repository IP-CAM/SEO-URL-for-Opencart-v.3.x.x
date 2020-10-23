<h2>Overview</h2>
<p>Opencart SEO URL is a program code which automatically paste URL string to SEO URL input form. URL string is taken from the name of product (category name, information title, manufacturer name, etc.).</p>
<h2>How to install</h2>
<ol>
  <li>Copy file <code>app/controller/tool/url.php</code> to the folder <code>admin/controller/tool</code>.</li>
  <li>Copy file <code>app/model/tool/url.php</code> to the folder <code>admin/model/tool</code>.</li>
  <li>
    Copy code from the file <code>app/view/seo_url.twig</code> and paste it to the file where you want to use script.
    <br>
    For example: <code>product_form.twig</code>, <code>category_form.twig</code>, <code>information_form.twig</code> and others.</li>
  <li>Change permission to the file <code>admin/controller/tool/url.php</code> for the user group in admin panel.</li>
</ol>
