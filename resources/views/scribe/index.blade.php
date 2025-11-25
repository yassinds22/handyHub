<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "https://handyHub.dev-options.com";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.3.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.3.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-management" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-management">
                    <a href="#authenticating-management">Authenticating Management</a>
                </li>
                                    <ul id="tocify-subheader-authenticating-management" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="authenticating-management-POSTapi-register">
                                <a href="#authenticating-management-POSTapi-register">Register a new user (Email & Password)</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="authenticating-management-POSTapi-login">
                                <a href="#authenticating-management-POSTapi-login">Login a user (Email/Password or Google ID)</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-provinces" class="tocify-header">
                <li class="tocify-item level-1" data-unique="provinces">
                    <a href="#provinces">Provinces</a>
                </li>
                                    <ul id="tocify-subheader-provinces" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="provinces-GETapi-provinces">
                                <a href="#provinces-GETapi-provinces">Get a list of all provinces

Returns all provinces including id, name, and parent_id.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-service-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="service-requests">
                    <a href="#service-requests">Service Requests</a>
                </li>
                                    <ul id="tocify-subheader-service-requests" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="service-requests-GETapi-serviceRequest">
                                <a href="#service-requests-GETapi-serviceRequest">GET api/serviceRequest</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="service-requests-GETapi-serviceRequest--id-">
                                <a href="#service-requests-GETapi-serviceRequest--id-">GET api/serviceRequest/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="service-requests-POSTapi-serviceRequest">
                                <a href="#service-requests-POSTapi-serviceRequest">POST api/serviceRequest</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="service-requests-PUTapi-serviceRequest--id-">
                                <a href="#service-requests-PUTapi-serviceRequest--id-">PUT api/serviceRequest/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="service-requests-DELETEapi-serviceRequest--id-">
                                <a href="#service-requests-DELETEapi-serviceRequest--id-">DELETE api/serviceRequest/{id}</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-service-types" class="tocify-header">
                <li class="tocify-item level-1" data-unique="service-types">
                    <a href="#service-types">Service Types</a>
                </li>
                                    <ul id="tocify-subheader-service-types" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="service-types-GETapi-serviceType">
                                <a href="#service-types-GETapi-serviceType">Get all service types

Returns a list of all available service types.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="service-types-GETapi-serviceType--id-">
                                <a href="#service-types-GETapi-serviceType--id-">Get a service type by ID

Retrieve the details of a specific service type.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-workers" class="tocify-header">
                <li class="tocify-item level-1" data-unique="workers">
                    <a href="#workers">Workers</a>
                </li>
                                    <ul id="tocify-subheader-workers" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="workers-GETapi-worker">
                                <a href="#workers-GETapi-worker">GET api/worker</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="workers-GETapi-worker--id-">
                                <a href="#workers-GETapi-worker--id-">GET api/worker/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="workers-POSTapi-worker">
                                <a href="#workers-POSTapi-worker">POST api/worker</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="workers-PUTapi-worker--id-">
                                <a href="#workers-PUTapi-worker--id-">PUT api/worker/{id}</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-workers-search" class="tocify-header">
                <li class="tocify-item level-1" data-unique="workers-search">
                    <a href="#workers-search">Workers Search</a>
                </li>
                                    <ul id="tocify-subheader-workers-search" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="workers-search-GETapi-workers-search">
                                <a href="#workers-search-GETapi-workers-search">Search for workers using location, IDs, and multiple advanced filters.</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: November 25, 2025</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>https://handyHub.dev-options.com</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>To authenticate requests, include an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer {YOUR_SANCTUM_TOKEN}"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>You can get your token from the dashboard after logging in and creating an API Token.</p>

        <h1 id="authenticating-management">Authenticating Management</h1>

    <p>APIs for managing brands in the system.</p>

                                <h2 id="authenticating-management-POSTapi-register">Register a new user (Email &amp; Password)</h2>

<p>
</p>



<span id="example-requests-POSTapi-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://handyHub.dev-options.com/api/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"Yassin Ali\",
    \"email\": \"yassin@example.com\",
    \"password\": \"secret123\",
    \"google_id\": \"1234567890\",
    \"phone\": \"+967770000000\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://handyHub.dev-options.com/api/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "Yassin Ali",
    "email": "yassin@example.com",
    "password": "secret123",
    "google_id": "1234567890",
    "phone": "+967770000000"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-register">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;User registered successfully!&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Yassin Ali&quot;,
        &quot;email&quot;: &quot;yassin@example.com&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-register"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-register">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-register" data-method="POST"
      data-path="api/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-register"
                    onclick="tryItOut('POSTapi-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-register"
                    onclick="cancelTryOut('POSTapi-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-register"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-register"
               value="Yassin Ali"
               data-component="body">
    <br>
<p>The user's full name. Example: <code>Yassin Ali</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-register"
               value="yassin@example.com"
               data-component="body">
    <br>
<p>A valid email address. Example: <code>yassin@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-register"
               value="secret123"
               data-component="body">
    <br>
<p>A secure password. Example: <code>secret123</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>google_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="google_id"                data-endpoint="POSTapi-register"
               value="1234567890"
               data-component="body">
    <br>
<p>Optional Google account ID. Example: <code>1234567890</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="POSTapi-register"
               value="+967770000000"
               data-component="body">
    <br>
<p>optional The user's phone number. Example: <code>+967770000000</code></p>
        </div>
        </form>

                    <h2 id="authenticating-management-POSTapi-login">Login a user (Email/Password or Google ID)</h2>

<p>
</p>



<span id="example-requests-POSTapi-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://handyHub.dev-options.com/api/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"qkunze@example.com\",
    \"password\": \"O[2UZ5ij-e\\/dl4m{o,\",
    \"google_id\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://handyHub.dev-options.com/api/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "qkunze@example.com",
    "password": "O[2UZ5ij-e\/dl4m{o,",
    "google_id": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-login">
</span>
<span id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-login" data-method="POST"
      data-path="api/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-login"
                    onclick="tryItOut('POSTapi-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-login"
                    onclick="cancelTryOut('POSTapi-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-login"
               value="qkunze@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>qkunze@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-login"
               value="O[2UZ5ij-e/dl4m{o,"
               data-component="body">
    <br>
<p>Example: <code>O[2UZ5ij-e/dl4m{o,</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>google_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="google_id"                data-endpoint="POSTapi-login"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

                <h1 id="provinces">Provinces</h1>

    

                                <h2 id="provinces-GETapi-provinces">Get a list of all provinces

Returns all provinces including id, name, and parent_id.</h2>

<p>
</p>



<span id="example-requests-GETapi-provinces">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://handyHub.dev-options.com/api/provinces" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://handyHub.dev-options.com/api/provinces"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-provinces">
            <blockquote>
            <p>Example response (200, Success):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Sana&#039;a&quot;,
            &quot;parent_id&quot;: 0,
            &quot;created_at&quot;: &quot;2025-10-13T14:36:35.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-10-13T14:36:35.000000Z&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Aden&quot;,
            &quot;parent_id&quot;: 0,
            &quot;created_at&quot;: &quot;2025-10-13T14:36:35.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-10-13T14:36:35.000000Z&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-provinces" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-provinces"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-provinces"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-provinces" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-provinces">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-provinces" data-method="GET"
      data-path="api/provinces"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-provinces', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-provinces"
                    onclick="tryItOut('GETapi-provinces');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-provinces"
                    onclick="cancelTryOut('GETapi-provinces');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-provinces"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/provinces</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-provinces"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-provinces"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                <h1 id="service-requests">Service Requests</h1>

    

                                <h2 id="service-requests-GETapi-serviceRequest">GET api/serviceRequest</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-serviceRequest">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://handyHub.dev-options.com/api/serviceRequest" \
    --header "Authorization: Bearer {YOUR_SANCTUM_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://handyHub.dev-options.com/api/serviceRequest"
);

const headers = {
    "Authorization": "Bearer {YOUR_SANCTUM_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-serviceRequest">
            <blockquote>
            <p>Example response (200, Success):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;service_request_id&quot;: 1,
        &quot;service_id&quot;: 5,
        &quot;description&quot;: &quot;Fix electricity problem&quot;,
        &quot;province_id&quot;: 3,
        &quot;latitude&quot;: &quot;15.3694&quot;,
        &quot;longitude&quot;: &quot;44.1910&quot;,
        &quot;execution_date&quot;: &quot;2025-02-15&quot;,
        &quot;status&quot;: &quot;pending&quot;,
        &quot;user_id&quot;: 10,
        &quot;image&quot;: &quot;http://example.com/storage/image.jpg&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-serviceRequest" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-serviceRequest"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-serviceRequest"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-serviceRequest" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-serviceRequest">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-serviceRequest" data-method="GET"
      data-path="api/serviceRequest"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-serviceRequest', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-serviceRequest"
                    onclick="tryItOut('GETapi-serviceRequest');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-serviceRequest"
                    onclick="cancelTryOut('GETapi-serviceRequest');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-serviceRequest"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/serviceRequest</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-serviceRequest"
               value="Bearer {YOUR_SANCTUM_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_SANCTUM_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-serviceRequest"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-serviceRequest"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="service-requests-GETapi-serviceRequest--id-">GET api/serviceRequest/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-serviceRequest--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://handyHub.dev-options.com/api/serviceRequest/17" \
    --header "Authorization: Bearer {YOUR_SANCTUM_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://handyHub.dev-options.com/api/serviceRequest/17"
);

const headers = {
    "Authorization": "Bearer {YOUR_SANCTUM_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-serviceRequest--id-">
            <blockquote>
            <p>Example response (200, Success):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;service_request_id&quot;: 1,
    &quot;service_id&quot;: 5,
    &quot;description&quot;: &quot;Water leaking&quot;,
    &quot;province_id&quot;: 3,
    &quot;latitude&quot;: &quot;15.2&quot;,
    &quot;longitude&quot;: &quot;44.3&quot;,
    &quot;execution_date&quot;: &quot;2025-02-16&quot;,
    &quot;status&quot;: &quot;completed&quot;,
    &quot;user_id&quot;: 10,
    &quot;image&quot;: &quot;http://example.com/storage/image.jpg&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-serviceRequest--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-serviceRequest--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-serviceRequest--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-serviceRequest--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-serviceRequest--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-serviceRequest--id-" data-method="GET"
      data-path="api/serviceRequest/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-serviceRequest--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-serviceRequest--id-"
                    onclick="tryItOut('GETapi-serviceRequest--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-serviceRequest--id-"
                    onclick="cancelTryOut('GETapi-serviceRequest--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-serviceRequest--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/serviceRequest/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-serviceRequest--id-"
               value="Bearer {YOUR_SANCTUM_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_SANCTUM_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-serviceRequest--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-serviceRequest--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-serviceRequest--id-"
               value="17"
               data-component="url">
    <br>
<p>The ID of the service request. Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="service-requests-POSTapi-serviceRequest">POST api/serviceRequest</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-serviceRequest">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://handyHub.dev-options.com/api/serviceRequest" \
    --header "Authorization: Bearer {YOUR_SANCTUM_TOKEN}" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "description=Dolores dolorum amet iste laborum eius est dolor."\
    --form "province_id=17"\
    --form "latitude=consequatur"\
    --form "longitude=consequatur"\
    --form "execution_date=2025-02-15"\
    --form "service_id=17"\
    --form "image=@C:\Users\yassin\AppData\Local\Temp\php58DD.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://handyHub.dev-options.com/api/serviceRequest"
);

const headers = {
    "Authorization": "Bearer {YOUR_SANCTUM_TOKEN}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('description', 'Dolores dolorum amet iste laborum eius est dolor.');
body.append('province_id', '17');
body.append('latitude', 'consequatur');
body.append('longitude', 'consequatur');
body.append('execution_date', '2025-02-15');
body.append('service_id', '17');
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-serviceRequest">
            <blockquote>
            <p>Example response (201, Created):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Service request created successfully&quot;,
    &quot;data&quot;: {
        &quot;service_id&quot;: 5,
        &quot;description&quot;: &quot;Electricity problem&quot;,
        &quot;province_id&quot;: 3,
        &quot;latitude&quot;: &quot;15.0&quot;,
        &quot;longitude&quot;: &quot;44.1&quot;,
        &quot;execution_date&quot;: &quot;2025-02-15&quot;,
        &quot;user_id&quot;: 1
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-serviceRequest" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-serviceRequest"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-serviceRequest"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-serviceRequest" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-serviceRequest">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-serviceRequest" data-method="POST"
      data-path="api/serviceRequest"
      data-authed="1"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-serviceRequest', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-serviceRequest"
                    onclick="tryItOut('POSTapi-serviceRequest');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-serviceRequest"
                    onclick="cancelTryOut('POSTapi-serviceRequest');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-serviceRequest"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/serviceRequest</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-serviceRequest"
               value="Bearer {YOUR_SANCTUM_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_SANCTUM_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-serviceRequest"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-serviceRequest"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-serviceRequest"
               value="Dolores dolorum amet iste laborum eius est dolor."
               data-component="body">
    <br>
<p>Description of the request. Example: <code>Dolores dolorum amet iste laborum eius est dolor.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>province_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="province_id"                data-endpoint="POSTapi-serviceRequest"
               value="17"
               data-component="body">
    <br>
<p>Province ID. Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>latitude</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="latitude"                data-endpoint="POSTapi-serviceRequest"
               value="consequatur"
               data-component="body">
    <br>
<p>Latitude. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>longitude</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="longitude"                data-endpoint="POSTapi-serviceRequest"
               value="consequatur"
               data-component="body">
    <br>
<p>Longitude. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>execution_date</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="execution_date"                data-endpoint="POSTapi-serviceRequest"
               value="2025-02-15"
               data-component="body">
    <br>
<p>Execution date. Example: <code>2025-02-15</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-serviceRequest"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="user_id"                data-endpoint="POSTapi-serviceRequest"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>service_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="service_id"                data-endpoint="POSTapi-serviceRequest"
               value="17"
               data-component="body">
    <br>
<p>The service ID. Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>image</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="file" style="display: none"
                              name="image"                data-endpoint="POSTapi-serviceRequest"
               value=""
               data-component="body">
    <br>
<p>Optional image. Example: <code>C:\Users\yassin\AppData\Local\Temp\php58DD.tmp</code></p>
        </div>
        </form>

                    <h2 id="service-requests-PUTapi-serviceRequest--id-">PUT api/serviceRequest/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-serviceRequest--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "https://handyHub.dev-options.com/api/serviceRequest/17" \
    --header "Authorization: Bearer {YOUR_SANCTUM_TOKEN}" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "description=Dolores dolorum amet iste laborum eius est dolor."\
    --form "province_id=17"\
    --form "latitude=consequatur"\
    --form "longitude=consequatur"\
    --form "execution_date=consequatur"\
    --form "service_id=17"\
    --form "image=@C:\Users\yassin\AppData\Local\Temp\php58DE.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://handyHub.dev-options.com/api/serviceRequest/17"
);

const headers = {
    "Authorization": "Bearer {YOUR_SANCTUM_TOKEN}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('description', 'Dolores dolorum amet iste laborum eius est dolor.');
body.append('province_id', '17');
body.append('latitude', 'consequatur');
body.append('longitude', 'consequatur');
body.append('execution_date', 'consequatur');
body.append('service_id', '17');
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "PUT",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-serviceRequest--id-">
            <blockquote>
            <p>Example response (200, Updated):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Service request updated successfully&quot;,
    &quot;data&quot;: {
        &quot;service_id&quot;: 5,
        &quot;description&quot;: &quot;Updated description&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-serviceRequest--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-serviceRequest--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-serviceRequest--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-serviceRequest--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-serviceRequest--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-serviceRequest--id-" data-method="PUT"
      data-path="api/serviceRequest/{id}"
      data-authed="1"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-serviceRequest--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-serviceRequest--id-"
                    onclick="tryItOut('PUTapi-serviceRequest--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-serviceRequest--id-"
                    onclick="cancelTryOut('PUTapi-serviceRequest--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-serviceRequest--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/serviceRequest/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/serviceRequest/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PUTapi-serviceRequest--id-"
               value="Bearer {YOUR_SANCTUM_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_SANCTUM_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-serviceRequest--id-"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-serviceRequest--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-serviceRequest--id-"
               value="17"
               data-component="url">
    <br>
<p>The ID of the service request. Example: <code>17</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-serviceRequest--id-"
               value="Dolores dolorum amet iste laborum eius est dolor."
               data-component="body">
    <br>
<p>optional Description. Example: <code>Dolores dolorum amet iste laborum eius est dolor.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>province_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="province_id"                data-endpoint="PUTapi-serviceRequest--id-"
               value="17"
               data-component="body">
    <br>
<p>optional Province ID. Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>latitude</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="latitude"                data-endpoint="PUTapi-serviceRequest--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>optional Latitude. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>longitude</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="longitude"                data-endpoint="PUTapi-serviceRequest--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>optional Longitude. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>execution_date</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="execution_date"                data-endpoint="PUTapi-serviceRequest--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>optional Execution date. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PUTapi-serviceRequest--id-"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="user_id"                data-endpoint="PUTapi-serviceRequest--id-"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>service_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="service_id"                data-endpoint="PUTapi-serviceRequest--id-"
               value="17"
               data-component="body">
    <br>
<p>optional Service ID. Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>image</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="file" style="display: none"
                              name="image"                data-endpoint="PUTapi-serviceRequest--id-"
               value=""
               data-component="body">
    <br>
<p>optional Image. Example: <code>C:\Users\yassin\AppData\Local\Temp\php58DE.tmp</code></p>
        </div>
        </form>

                    <h2 id="service-requests-DELETEapi-serviceRequest--id-">DELETE api/serviceRequest/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-serviceRequest--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "https://handyHub.dev-options.com/api/serviceRequest/17" \
    --header "Authorization: Bearer {YOUR_SANCTUM_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://handyHub.dev-options.com/api/serviceRequest/17"
);

const headers = {
    "Authorization": "Bearer {YOUR_SANCTUM_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-serviceRequest--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Service request deleted successfully&quot;,
    &quot;data&quot;: true
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-serviceRequest--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-serviceRequest--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-serviceRequest--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-serviceRequest--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-serviceRequest--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-serviceRequest--id-" data-method="DELETE"
      data-path="api/serviceRequest/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-serviceRequest--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-serviceRequest--id-"
                    onclick="tryItOut('DELETEapi-serviceRequest--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-serviceRequest--id-"
                    onclick="cancelTryOut('DELETEapi-serviceRequest--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-serviceRequest--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/serviceRequest/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEapi-serviceRequest--id-"
               value="Bearer {YOUR_SANCTUM_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_SANCTUM_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-serviceRequest--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-serviceRequest--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-serviceRequest--id-"
               value="17"
               data-component="url">
    <br>
<p>The ID of the service request to delete. Example: <code>17</code></p>
            </div>
                    </form>

                <h1 id="service-types">Service Types</h1>

    

                                <h2 id="service-types-GETapi-serviceType">Get all service types

Returns a list of all available service types.</h2>

<p>
</p>



<span id="example-requests-GETapi-serviceType">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://handyHub.dev-options.com/api/serviceType" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://handyHub.dev-options.com/api/serviceType"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-serviceType">
            <blockquote>
            <p>Example response (200, Success):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
  &quot;id&quot;: 1,
  &quot;name&quot;: &quot;Electricity&quot;,

}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-serviceType" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-serviceType"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-serviceType"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-serviceType" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-serviceType">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-serviceType" data-method="GET"
      data-path="api/serviceType"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-serviceType', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-serviceType"
                    onclick="tryItOut('GETapi-serviceType');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-serviceType"
                    onclick="cancelTryOut('GETapi-serviceType');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-serviceType"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/serviceType</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-serviceType"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-serviceType"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="service-types-GETapi-serviceType--id-">Get a service type by ID

Retrieve the details of a specific service type.</h2>

<p>
</p>



<span id="example-requests-GETapi-serviceType--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://handyHub.dev-options.com/api/serviceType/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://handyHub.dev-options.com/api/serviceType/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-serviceType--id-">
            <blockquote>
            <p>Example response (200, Success):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;name&quot;: &quot;Plumbing&quot;,
    &quot;description&quot;: &quot;Water and pipe services&quot;,
    &quot;status&quot;: &quot;active&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Not Found):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Service Type not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-serviceType--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-serviceType--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-serviceType--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-serviceType--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-serviceType--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-serviceType--id-" data-method="GET"
      data-path="api/serviceType/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-serviceType--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-serviceType--id-"
                    onclick="tryItOut('GETapi-serviceType--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-serviceType--id-"
                    onclick="cancelTryOut('GETapi-serviceType--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-serviceType--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/serviceType/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-serviceType--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-serviceType--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-serviceType--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the service type. Example: <code>1</code></p>
            </div>
                    </form>

                <h1 id="workers">Workers</h1>

    

                                <h2 id="workers-GETapi-worker">GET api/worker</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-worker">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://handyHub.dev-options.com/api/worker" \
    --header "Authorization: Bearer {YOUR_SANCTUM_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://handyHub.dev-options.com/api/worker"
);

const headers = {
    "Authorization": "Bearer {YOUR_SANCTUM_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-worker">
            <blockquote>
            <p>Example response (200, Success):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;worker_id&quot;: 1,
        &quot;worker_name&quot;: &quot;yassin&quot;,
        &quot;worker_phone&quot;: &quot;7777777777&quot;,
        &quot;service_id&quot;: 5,
        &quot;service_name&quot;: &quot;كهربائي&quot;,
        &quot;experience_years&quot;: 3,
        &quot;bio&quot;: &quot;Expert electrician&quot;,
        &quot;province_id&quot;: 3,
        &quot;province_name&quot;: &quot;صنعاء&quot;,
        &quot;latitude&quot;: &quot;15.36&quot;,
        &quot;longitude&quot;: &quot;44.19&quot;,
        &quot;execution_date&quot;: &quot;2025-02-19&quot;,
        &quot;status&quot;: &quot;available&quot;,
        &quot;user_id&quot;: 10,
        &quot;user_name&quot;: &quot;yassin&quot;,
        &quot;image&quot;: &quot;http://example.com/storage/image.jpg&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-worker" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-worker"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-worker"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-worker" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-worker">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-worker" data-method="GET"
      data-path="api/worker"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-worker', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-worker"
                    onclick="tryItOut('GETapi-worker');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-worker"
                    onclick="cancelTryOut('GETapi-worker');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-worker"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/worker</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-worker"
               value="Bearer {YOUR_SANCTUM_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_SANCTUM_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-worker"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-worker"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="workers-GETapi-worker--id-">GET api/worker/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-worker--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://handyHub.dev-options.com/api/worker/1" \
    --header "Authorization: Bearer {YOUR_SANCTUM_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://handyHub.dev-options.com/api/worker/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_SANCTUM_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-worker--id-">
            <blockquote>
            <p>Example response (200, Success):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;worker_id&quot;: 1,
    &quot;worker_name&quot;: &quot;yassin&quot;,
    &quot;worker_phone&quot;: &quot;7777777777&quot;,
    &quot;service_id&quot;: 5,
    &quot;service_name&quot;: &quot;كهربائي&quot;,
    &quot;experience_years&quot;: 3,
    &quot;bio&quot;: &quot;Expert electrician&quot;,
    &quot;province_id&quot;: 3,
    &quot;province_name&quot;: &quot;صنعاء&quot;,
    &quot;latitude&quot;: &quot;15.36&quot;,
    &quot;longitude&quot;: &quot;44.19&quot;,
    &quot;execution_date&quot;: &quot;2025-02-19&quot;,
    &quot;status&quot;: &quot;available&quot;,
    &quot;user_id&quot;: 10,
    &quot;user_name&quot;: &quot;yassin&quot;,
    &quot;image&quot;: &quot;http://example.com/storage/image.jpg&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Not Found):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Worker not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-worker--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-worker--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-worker--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-worker--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-worker--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-worker--id-" data-method="GET"
      data-path="api/worker/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-worker--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-worker--id-"
                    onclick="tryItOut('GETapi-worker--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-worker--id-"
                    onclick="cancelTryOut('GETapi-worker--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-worker--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/worker/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-worker--id-"
               value="Bearer {YOUR_SANCTUM_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_SANCTUM_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-worker--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-worker--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-worker--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the worker. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="workers-POSTapi-worker">POST api/worker</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-worker">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://handyHub.dev-options.com/api/worker" \
    --header "Authorization: Bearer {YOUR_SANCTUM_TOKEN}" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "service_id=5"\
    --form "experience_years=4"\
    --form "bio=consequatur"\
    --form "province_id=3"\
    --form "latitude=15.3694"\
    --form "longitude=44.1910"\
    --form "execution_date=2025-03-01"\
    --form "image=@C:\Users\yassin\AppData\Local\Temp\php58BB.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://handyHub.dev-options.com/api/worker"
);

const headers = {
    "Authorization": "Bearer {YOUR_SANCTUM_TOKEN}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('service_id', '5');
body.append('experience_years', '4');
body.append('bio', 'consequatur');
body.append('province_id', '3');
body.append('latitude', '15.3694');
body.append('longitude', '44.1910');
body.append('execution_date', '2025-03-01');
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-worker">
            <blockquote>
            <p>Example response (201, Created):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Worker created successfully&quot;,
    &quot;data&quot;: {
        &quot;service_id&quot;: 5,
        &quot;experience_years&quot;: 4,
        &quot;bio&quot;: &quot;Expert plumber&quot;,
        &quot;province_id&quot;: 3,
        &quot;latitude&quot;: &quot;15.3694&quot;,
        &quot;longitude&quot;: &quot;44.1910&quot;,
        &quot;execution_date&quot;: &quot;2025-03-01&quot;,
        &quot;user_id&quot;: 12
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-worker" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-worker"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-worker"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-worker" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-worker">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-worker" data-method="POST"
      data-path="api/worker"
      data-authed="1"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-worker', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-worker"
                    onclick="tryItOut('POSTapi-worker');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-worker"
                    onclick="cancelTryOut('POSTapi-worker');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-worker"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/worker</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-worker"
               value="Bearer {YOUR_SANCTUM_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_SANCTUM_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-worker"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-worker"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>service_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="service_id"                data-endpoint="POSTapi-worker"
               value="5"
               data-component="body">
    <br>
<p>The service ID. Example: <code>5</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>experience_years</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="experience_years"                data-endpoint="POSTapi-worker"
               value="4"
               data-component="body">
    <br>
<p>Number of years of experience. Example: <code>4</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>bio</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="bio"                data-endpoint="POSTapi-worker"
               value="consequatur"
               data-component="body">
    <br>
<p>Brief description about the worker. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>province_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="province_id"                data-endpoint="POSTapi-worker"
               value="3"
               data-component="body">
    <br>
<p>Province ID. Example: <code>3</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>latitude</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="latitude"                data-endpoint="POSTapi-worker"
               value="15.3694"
               data-component="body">
    <br>
<p>Latitude. Example: <code>15.3694</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>longitude</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="longitude"                data-endpoint="POSTapi-worker"
               value="44.1910"
               data-component="body">
    <br>
<p>Longitude. Example: <code>44.1910</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>execution_date</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="execution_date"                data-endpoint="POSTapi-worker"
               value="2025-03-01"
               data-component="body">
    <br>
<p>Available date. Example: <code>2025-03-01</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-worker"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="user_id"                data-endpoint="POSTapi-worker"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>image</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="file" style="display: none"
                              name="image"                data-endpoint="POSTapi-worker"
               value=""
               data-component="body">
    <br>
<p>Optional profile photo. Example: <code>C:\Users\yassin\AppData\Local\Temp\php58BB.tmp</code></p>
        </div>
        </form>

                    <h2 id="workers-PUTapi-worker--id-">PUT api/worker/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-worker--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "https://handyHub.dev-options.com/api/worker/1" \
    --header "Authorization: Bearer {YOUR_SANCTUM_TOKEN}" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "service_id=17"\
    --form "experience_years=17"\
    --form "bio=consequatur"\
    --form "province_id=17"\
    --form "latitude=consequatur"\
    --form "longitude=consequatur"\
    --form "execution_date=consequatur"\
    --form "image=@C:\Users\yassin\AppData\Local\Temp\php58CC.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://handyHub.dev-options.com/api/worker/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_SANCTUM_TOKEN}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('service_id', '17');
body.append('experience_years', '17');
body.append('bio', 'consequatur');
body.append('province_id', '17');
body.append('latitude', 'consequatur');
body.append('longitude', 'consequatur');
body.append('execution_date', 'consequatur');
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "PUT",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-worker--id-">
            <blockquote>
            <p>Example response (200, Updated):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Worker updated successfully&quot;,
    &quot;data&quot;: {
        &quot;experience_years&quot;: 5,
        &quot;bio&quot;: &quot;Updated worker info&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-worker--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-worker--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-worker--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-worker--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-worker--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-worker--id-" data-method="PUT"
      data-path="api/worker/{id}"
      data-authed="1"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-worker--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-worker--id-"
                    onclick="tryItOut('PUTapi-worker--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-worker--id-"
                    onclick="cancelTryOut('PUTapi-worker--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-worker--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/worker/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/worker/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PUTapi-worker--id-"
               value="Bearer {YOUR_SANCTUM_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_SANCTUM_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-worker--id-"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-worker--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-worker--id-"
               value="1"
               data-component="url">
    <br>
<p>The worker ID. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>service_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="service_id"                data-endpoint="PUTapi-worker--id-"
               value="17"
               data-component="body">
    <br>
<p>optional Updated service ID. Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>experience_years</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="experience_years"                data-endpoint="PUTapi-worker--id-"
               value="17"
               data-component="body">
    <br>
<p>optional Updated years of experience. Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>bio</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="bio"                data-endpoint="PUTapi-worker--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>optional Updated biography. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>province_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="province_id"                data-endpoint="PUTapi-worker--id-"
               value="17"
               data-component="body">
    <br>
<p>optional Province ID. Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>latitude</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="latitude"                data-endpoint="PUTapi-worker--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>optional Latitude. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>longitude</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="longitude"                data-endpoint="PUTapi-worker--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>optional Longitude. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>execution_date</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="execution_date"                data-endpoint="PUTapi-worker--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>optional Updated date. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PUTapi-worker--id-"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="user_id"                data-endpoint="PUTapi-worker--id-"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>image</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="file" style="display: none"
                              name="image"                data-endpoint="PUTapi-worker--id-"
               value=""
               data-component="body">
    <br>
<p>optional Updated worker image. Example: <code>C:\Users\yassin\AppData\Local\Temp\php58CC.tmp</code></p>
        </div>
        </form>

                <h1 id="workers-search">Workers Search</h1>

    

                                <h2 id="workers-search-GETapi-workers-search">Search for workers using location, IDs, and multiple advanced filters.</h2>

<p>
</p>

<p>This API allows searching for workers by:</p>
<ul>
<li>Province or district name</li>
<li>Province or district ID</li>
<li>Geolocation coordinates (latitude/longitude)</li>
<li>Service type, minimum experience, and general search term</li>
</ul>

<span id="example-requests-GETapi-workers-search">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://handyHub.dev-options.com/api/workers/search?province_name=Sanaa&amp;district_name=Old+City&amp;province_id=1&amp;district_id=4&amp;latitude=15.3547&amp;longitude=44.207&amp;search=plumber&amp;service_id=3&amp;min_experience=2" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://handyHub.dev-options.com/api/workers/search"
);

const params = {
    "province_name": "Sanaa",
    "district_name": "Old City",
    "province_id": "1",
    "district_id": "4",
    "latitude": "15.3547",
    "longitude": "44.207",
    "search": "plumber",
    "service_id": "3",
    "min_experience": "2",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-workers-search">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;5 workers found&quot;,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Ahmed Ali&quot;,
            &quot;service&quot;: &quot;Plumber&quot;,
            &quot;experience&quot;: 4,
            &quot;province&quot;: &quot;Sanaa&quot;,
            &quot;district&quot;: &quot;Tahrer&quot;,
            &quot;latitude&quot;: 15.3547,
            &quot;longitude&quot;: 44.207
        }
    ],
    &quot;search_type&quot;: &quot;location_name&quot;,
    &quot;filters_applied&quot;: {
        &quot;province_name&quot;: &quot;Sanaa&quot;,
        &quot;district_name&quot;: &quot;Old City&quot;,
        &quot;province_id&quot;: null,
        &quot;parent_id&quot;: null,
        &quot;latitude&quot;: null,
        &quot;longitude&quot;: null,
        &quot;search_term&quot;: null,
        &quot;service_id&quot;: 3,
        &quot;min_experience&quot;: 2
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-workers-search" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-workers-search"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-workers-search"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-workers-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-workers-search">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-workers-search" data-method="GET"
      data-path="api/workers/search"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-workers-search', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-workers-search"
                    onclick="tryItOut('GETapi-workers-search');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-workers-search"
                    onclick="cancelTryOut('GETapi-workers-search');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-workers-search"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/workers/search</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-workers-search"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-workers-search"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>province_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="province_name"                data-endpoint="GETapi-workers-search"
               value="Sanaa"
               data-component="query">
    <br>
<p>Search by province name. Example: <code>Sanaa</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>district_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="district_name"                data-endpoint="GETapi-workers-search"
               value="Old City"
               data-component="query">
    <br>
<p>Search by district name. Example: <code>Old City</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>province_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="province_id"                data-endpoint="GETapi-workers-search"
               value="1"
               data-component="query">
    <br>
<p>Search by province ID. Example: <code>1</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>district_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="district_id"                data-endpoint="GETapi-workers-search"
               value="4"
               data-component="query">
    <br>
<p>Search by district ID. Example: <code>4</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>latitude</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="latitude"                data-endpoint="GETapi-workers-search"
               value="15.3547"
               data-component="query">
    <br>
<p>User latitude. Example: <code>15.3547</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>longitude</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="longitude"                data-endpoint="GETapi-workers-search"
               value="44.207"
               data-component="query">
    <br>
<p>User longitude. Example: <code>44.207</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>search</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="search"                data-endpoint="GETapi-workers-search"
               value="plumber"
               data-component="query">
    <br>
<p>General search term. Example: <code>plumber</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>service_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="service_id"                data-endpoint="GETapi-workers-search"
               value="3"
               data-component="query">
    <br>
<p>Filter by service ID. Example: <code>3</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>min_experience</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="min_experience"                data-endpoint="GETapi-workers-search"
               value="2"
               data-component="query">
    <br>
<p>Minimum worker experience. Example: <code>2</code></p>
            </div>
                </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
