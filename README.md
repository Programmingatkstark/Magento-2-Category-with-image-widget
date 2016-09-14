## Category with image widget for Magento 2

###Features
<ul>
<li>Display category with images in any page</li>
<li>Only top level categories</li>
</ul>

###Mannual Installation Instructions
Go to Magento2 Project 
<strong>root/app/code </strong> <em> (create <strong> code</strong> folder if not exist)</em>

Paste downloaded/cloned folder.

So folder strucuture will be as following

<pre>
<code>
Magento2
└── app
   └── code
       └── ProgrammingAtKstark
           └──CatewithimgWidget
               ├──Block
               ├──etc
               ├──Model
               ├──view
               ├──composer.json
               └──registration.php

</code>
</pre>


###Enable this widget
to Enable this module simply follow these steps:
<ul>
    <li><code>php bin/magento setup:upgrade</code></li>
    <li><code>php bin/magento cache:flush</code></li>
    <li><strong>Re-Compile (in-case you have compilation enabled)</strong><br>
        <code>bin/magento setup:di:compile</code>
    </li>
</ul>

### Notes
<ul>
    <li>If you are selecting more then 3 categories then you need to make changes in <code>view/frontend/web/css/widget.css</code></li>
</ul>

### Contributing
<ul>
    <li>Fork it</li>
    <li>Create your feature branch (git checkout -b my-new-feature)</li>
    <li>Commit your changes (git commit -am 'Add some feature')</li>
    <li>Push to the branch (git push origin my-new-feature)</li>
        <li>Create new Pull Request</li>
</ul>

### License

By contributing your code, you agree to license your contribution under the MIT License.

