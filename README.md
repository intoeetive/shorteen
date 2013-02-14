	<h1>Shorteen</h1>

	<p>Shorteen lets you shorten your URLs using wide range of shortening services - third-party and self-hosted.</p>
    

	<h2><a name="usage"></a>Usage</h2>
    
<code>
{exp:shorteen:process service="bitly" url="http://www.ellislab.com"}
</code>    
<p>Parameters:</p>
<ul>
<li><strong>url</strong> &mdash; URL to shorten. If omited, will shorten URL of current page.</li>
<li><strong>service</strong> &mdash; shortening service to use. Possible values:
    <ul>
        <li><ins>googl</ins> &mdash; <a href="http://goo.gl">goo.gl</a> (default)</li>
        <li><ins>isgd</ins> &mdash; <a href="http://is.gd">is.gd</a></li>
        <li><ins>bitly</ins> &mdash; <a href="http://bitly.com">bit.ly</a> (default)</li>
        <li><ins>yourls</ins> &mdash; <a href="http://yourls.org">YOURLS</a> based service (running on any domain)</li>
        <li><ins>lessn-more</ins> &mdash; <a href="http://lessnmore.net/">Lessn More</a> based service (running on any domain)</li>
    </ul>
</li>
</ul>

<p>The shortest form of tag would be <em>{exp:shorteen:process}</em> &mdash; shortens URL of current page using goo.gl</p>
<p>If service is not available or some data are missing in settings, the module will return the 'initial' long URL.</p>
  
    
	<h2><a name="settings"></a>Settings</h2>
    
<p>Some shortening services are available openly for everyone, and some require providing API key and/or other data. You need to provide those in module settings.</p>

<h4>goo.gl</h4>
<p>To acquire an API key, visit the <a href="https://code.google.com/apis/console">APIs Console</a>. In the Services pane, activate the Google URL Shortener API; if the Terms of Service appear, read and accept them.<br />

Next, go to the <a href="https://code.google.com/apis/console#access">API Access</a> pane. The API key is near the bottom of that pane, in the section titled "Simple API Access."</p>

<h4>bit.ly</h4>

<p>To get started, you'll need a free bitly user account and Access token. Signup at: <a href="http://bitly.com/a/sign_up">http://bitly.com/a/sign_up</a>

If you already have an account, you can find your access token at: <a href="https://bitly.com/a/oauth_apps">https://bitly.com/a/oauth_apps</a></p>

<h4>YOURLS</h4>

<p>If you have YOURLS running on you own domain, you need to specify service URL (where script is installed) and secret signature token. The signature can be found on http://yourls-address/admin/tools.php</p>

<h4>Lessn More</h4>

<p>If you have Lessn More running on you own domain, you need to specify service URL (where script is installed) and API key (displayed when you log in to Lessn More).</p>