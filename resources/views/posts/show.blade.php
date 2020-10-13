@extends('layouts.app')
@section('title', '文章详情')

@section('content')
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="d-none d-lg-block col-lg-2"></div>
                <div class="col-lg-8 nopadding-md">
                    <div class="container nopadding-md" id="board-ctn">
                        <div class="py-5" id="board">
                            <article class="post-content mx-auto" id="post">
                                <!-- SEO header -->
                                <h1 style="display: none">Hexo 云服务备份与使用 Jupyter</h1>

                                <div class="markdown-body" id="post-body">
                                    <div class="note note-success">
                                        <p>本文由 Fluid 用户授权转载，版权归原作者所有。</p>
                                        <p>本文作者：Vince<br>原文地址：<a href="https://i.vince.pub/posts/14677127/"
                                                                 target="_blank"
                                                                 rel="noopener external nofollow noreferrer">https://i.vince.pub/posts/14677127/</a>
                                        </p>
                                    </div>
                                    <h2 id="前言"><a
                                            href="https://hexo.fluid-dev.com/posts/fluid-write/#%E5%89%8D%E8%A8%80"
                                            class="headerlink" title="前言"></a>前言<a class="anchorjs-link "
                                                                                   aria-label="Anchor"
                                                                                   data-anchorjs-icon=""
                                                                                   href="https://hexo.fluid-dev.com/posts/fluid-write/#%E5%89%8D%E8%A8%80"
                                                                                   style="font: 1em / 1 anchorjs-icons; padding-left: 0.375em;"></a>
                                    </h2>
                                    <p>Fluid 是一款很十分优雅的主题，那么写一篇优雅的文章搭配它呢？以下会从几个方面来简述，主要还是做几个推荐。</p>
                                    <h2 id="文章内容"><a
                                            href="https://hexo.fluid-dev.com/posts/fluid-write/#%E6%96%87%E7%AB%A0%E5%86%85%E5%AE%B9"
                                            class="headerlink" title="文章内容"></a>文章内容<a class="anchorjs-link "
                                                                                       aria-label="Anchor"
                                                                                       data-anchorjs-icon=""
                                                                                       href="https://hexo.fluid-dev.com/posts/fluid-write/#%E6%96%87%E7%AB%A0%E5%86%85%E5%AE%B9"
                                                                                       style="font: 1em / 1 anchorjs-icons; padding-left: 0.375em;"></a>
                                    </h2>
                                    <h3 id="熟悉-Markdown-语法"><a
                                            href="https://hexo.fluid-dev.com/posts/fluid-write/#%E7%86%9F%E6%82%89-Markdown-%E8%AF%AD%E6%B3%95"
                                            class="headerlink" title="熟悉 Markdown 语法"></a>熟悉 Markdown 语法<a
                                            class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon=""
                                            href="https://hexo.fluid-dev.com/posts/fluid-write/#%E7%86%9F%E6%82%89-Markdown-%E8%AF%AD%E6%B3%95"
                                            style="font: 1em / 1 anchorjs-icons; padding-left: 0.375em;"></a></h3>
                                    <p>对于使用 Hexo 的大多数人来说，相信对 Markdown 的语法不会陌生。熟练掌握 Markdown
                                        语法对我们的写作拥有极大的帮助，这里用少用的表格和脚注来举个例子。至于为什么有些公式、流程图无法渲染，是因为 <strong>Markdown
                                            追求简洁式写作，默认渲染器不支持复杂渲染。</strong></p>
                                    <h4 id="表格"><a
                                            href="https://hexo.fluid-dev.com/posts/fluid-write/#%E8%A1%A8%E6%A0%BC"
                                            class="headerlink" title="表格"></a>表格<a class="anchorjs-link "
                                                                                   aria-label="Anchor"
                                                                                   data-anchorjs-icon=""
                                                                                   href="https://hexo.fluid-dev.com/posts/fluid-write/#%E8%A1%A8%E6%A0%BC"
                                                                                   style="font: 1em / 1 anchorjs-icons; padding-left: 0.375em;"></a>
                                    </h4>
                                    <div class="table-container">
                                        <table>
                                            <thead>
                                            <tr>
                                                <th>站点</th>
                                                <th style="text-align:center">地址</th>
                                                <th style="text-align:right">介绍</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Fluid Docs</td>
                                                <td style="text-align:center"><a href="https://hexo.fluid-dev.com/docs/"
                                                                                 target="_blank"
                                                                                 rel="noopener external nofollow noreferrer">https://hexo.fluid-dev.com/docs/</a>
                                                </td>
                                                <td style="text-align:right">Fluid 官方文档</td>
                                            </tr>
                                            <tr>
                                                <td>Hexo-theme-fluid</td>
                                                <td style="text-align:center"><a
                                                        href="https://github.com/fluid-dev/hexo-theme-fluid"
                                                        target="_blank" rel="noopener external nofollow noreferrer">https://github.com/fluid-dev/hexo-theme-fluid</a>
                                                </td>
                                                <td style="text-align:right">Fluid Github Repo</td>
                                            </tr>
                                            <tr>
                                                <td>Fluid Blog</td>
                                                <td style="text-align:center"><a href="https://hexo.fluid-dev.com/"
                                                                                 target="_blank"
                                                                                 rel="noopener external nofollow noreferrer">https://hexo.fluid-dev.com/</a>
                                                </td>
                                                <td style="text-align:right">Fluid 官方博客</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <pre><code class="hljs gherkin">站点|<span class="hljs-string">地址</span>|<span
                                                class="hljs-string">介绍</span>
<span class="hljs-string">--</span>|<span class="hljs-string">:--:</span>|<span class="hljs-string">--:</span>
<span class="hljs-string">Fluid Docs</span>|<span class="hljs-string">https://hexo.fluid-dev.com/docs/</span>|<span
                                                class="hljs-string">Fluid 官方文档</span>
<span class="hljs-string">Hexo-theme-fluid</span>|<span class="hljs-string">https://github.com/fluid-dev/hexo-theme-fluid</span>|<span
                                                class="hljs-string">Fluid Github Repo</span>
<span class="hljs-string">Fluid Blog</span>|<span class="hljs-string">https://hexo.fluid-dev.com/</span>|<span
                                                class="hljs-string">Fluid 官方博客</span></code><button
                                            class="copy-btn copy-btn-dark" data-clipboard-snippet=""><i
                                                class="iconfont icon-copy"></i><span>Copy</span></button></pre>
                                    <h4 id="脚注"><a
                                            href="https://hexo.fluid-dev.com/posts/fluid-write/#%E8%84%9A%E6%B3%A8"
                                            class="headerlink" title="脚注"></a>脚注<a class="anchorjs-link "
                                                                                   aria-label="Anchor"
                                                                                   data-anchorjs-icon=""
                                                                                   href="https://hexo.fluid-dev.com/posts/fluid-write/#%E8%84%9A%E6%B3%A8"
                                                                                   style="font: 1em / 1 anchorjs-icons; padding-left: 0.375em;"></a>
                                    </h4>
                                    <p>默认渲染器下正常显示，不同渲染器显示效果不同，写法如下：</p>
                                    <pre><code class="hljs markdown">脚注演示[^1]
[<span class="hljs-symbol">^1</span>]: <span class="hljs-link">脚注内容演示</span></code><button
                                            class="copy-btn copy-btn-dark" data-clipboard-snippet=""><i
                                                class="iconfont icon-copy"></i><span>Copy</span></button></pre>
                                    <h3 id="善用-HTML"><a
                                            href="https://hexo.fluid-dev.com/posts/fluid-write/#%E5%96%84%E7%94%A8-HTML"
                                            class="headerlink" title="善用 HTML"></a>善用 HTML<a class="anchorjs-link "
                                                                                             aria-label="Anchor"
                                                                                             data-anchorjs-icon=""
                                                                                             href="https://hexo.fluid-dev.com/posts/fluid-write/#%E5%96%84%E7%94%A8-HTML"
                                                                                             style="font: 1em / 1 anchorjs-icons; padding-left: 0.375em;"></a>
                                    </h3>
                                    <p>我们可以在 Markdown 中插入一些简单的 HTML 代码或 CSS 片段来获得更多扩展，使得文章内容更具有多样性。以下演示几个简单功能。</p>
                                    <p><a id="demo">跳转位置演示（跳转位置设置点）</a></p>
                                    <h4 id="文字颜色"><a
                                            href="https://hexo.fluid-dev.com/posts/fluid-write/#%E6%96%87%E5%AD%97%E9%A2%9C%E8%89%B2"
                                            class="headerlink" title="文字颜色"></a>文字颜色<a class="anchorjs-link "
                                                                                       aria-label="Anchor"
                                                                                       data-anchorjs-icon=""
                                                                                       href="https://hexo.fluid-dev.com/posts/fluid-write/#%E6%96%87%E5%AD%97%E9%A2%9C%E8%89%B2"
                                                                                       style="font: 1em / 1 anchorjs-icons; padding-left: 0.375em;"></a>
                                    </h4>
                                    <p><span style="color: #519D9E; ">#519D9E颜色演示</span></p>
                                    <pre><code class="hljs xml"><span class="hljs-tag">&lt;<span
                                                    class="hljs-name">span</span>  <span class="hljs-attr">style</span>=<span
                                                    class="hljs-string">"color: #519D9E; "</span>&gt;</span>#519D9E颜色演示<span
                                                class="hljs-tag">&lt;/<span
                                                    class="hljs-name">span</span>&gt;</span></code><button
                                            class="copy-btn copy-btn-dark" data-clipboard-snippet=""><i
                                                class="iconfont icon-copy"></i><span>Copy</span></button></pre>
                                    <hr>
                                    <h4 id="文字大小"><a
                                            href="https://hexo.fluid-dev.com/posts/fluid-write/#%E6%96%87%E5%AD%97%E5%A4%A7%E5%B0%8F"
                                            class="headerlink" title="文字大小"></a>文字大小<a class="anchorjs-link "
                                                                                       aria-label="Anchor"
                                                                                       data-anchorjs-icon=""
                                                                                       href="https://hexo.fluid-dev.com/posts/fluid-write/#%E6%96%87%E5%AD%97%E5%A4%A7%E5%B0%8F"
                                                                                       style="font: 1em / 1 anchorjs-icons; padding-left: 0.375em;"></a>
                                    </h4>
                                    <p><span style="font-size:0.7em;">0.7em 文字大小演示</span></p>
                                    <pre><code class="hljs xml"><span class="hljs-tag">&lt;<span
                                                    class="hljs-name">span</span>  <span class="hljs-attr">style</span>=<span
                                                    class="hljs-string">"font-size:0.7em;"</span>&gt;</span>0.7em 文字大小演示<span
                                                class="hljs-tag">&lt;/<span
                                                    class="hljs-name">span</span>&gt;</span></code><button
                                            class="copy-btn copy-btn-dark" data-clipboard-snippet=""><i
                                                class="iconfont icon-copy"></i><span>Copy</span></button></pre>
                                    <hr>
                                    <h4 id="文字位置"><a
                                            href="https://hexo.fluid-dev.com/posts/fluid-write/#%E6%96%87%E5%AD%97%E4%BD%8D%E7%BD%AE"
                                            class="headerlink" title="文字位置"></a>文字位置<a class="anchorjs-link "
                                                                                       aria-label="Anchor"
                                                                                       data-anchorjs-icon=""
                                                                                       href="https://hexo.fluid-dev.com/posts/fluid-write/#%E6%96%87%E5%AD%97%E4%BD%8D%E7%BD%AE"
                                                                                       style="font: 1em / 1 anchorjs-icons; padding-left: 0.375em;"></a>
                                    </h4>
                                    <p style="text-align:center">内容居中演示</p>

                                    <pre><code class="hljs xml"><span class="hljs-tag">&lt;<span
                                                    class="hljs-name">p</span> <span
                                                    class="hljs-attr">style</span>=<span class="hljs-string">"text-align:center"</span>&gt;</span>内容居中演示<span
                                                class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span> # 可以修改 text-align 参数来设置文字位置。</code><button
                                            class="copy-btn copy-btn-dark" data-clipboard-snippet=""><i
                                                class="iconfont icon-copy"></i><span>Copy</span></button></pre>
                                    <hr>
                                    <h4 id="页内跳转"><a
                                            href="https://hexo.fluid-dev.com/posts/fluid-write/#%E9%A1%B5%E5%86%85%E8%B7%B3%E8%BD%AC"
                                            class="headerlink" title="页内跳转"></a>页内跳转<a class="anchorjs-link "
                                                                                       aria-label="Anchor"
                                                                                       data-anchorjs-icon=""
                                                                                       href="https://hexo.fluid-dev.com/posts/fluid-write/#%E9%A1%B5%E5%86%85%E8%B7%B3%E8%BD%AC"
                                                                                       style="font: 1em / 1 anchorjs-icons; padding-left: 0.375em;"></a>
                                    </h4>
                                    <p><a href="https://hexo.fluid-dev.com/posts/fluid-write/#demo">点击到达跳转位置演示</a></p>
                                    <pre><code class="hljs livecodeserver">&lt;<span class="hljs-keyword">a</span> href=<span
                                                class="hljs-string">"#demo"</span>&gt;点击到达跳转位置演示&lt;/<span
                                                class="hljs-keyword">a</span>&gt; <span class="hljs-comment"># 在需要跳转的地方添加此代码。</span>
&lt;<span class="hljs-keyword">a</span> id=<span class="hljs-string">"demo"</span>&gt;跳转位置演示（跳转位置设置点）&lt;/<span
                                                class="hljs-keyword">a</span>&gt; <span class="hljs-comment"># 在跳转位置添加次代码。</span></code><button
                                            class="copy-btn copy-btn-dark" data-clipboard-snippet=""><i
                                                class="iconfont icon-copy"></i><span>Copy</span></button></pre>
                                    <hr>
                                    <h4 id="综合演示"><a
                                            href="https://hexo.fluid-dev.com/posts/fluid-write/#%E7%BB%BC%E5%90%88%E6%BC%94%E7%A4%BA"
                                            class="headerlink" title="综合演示"></a>综合演示<a class="anchorjs-link "
                                                                                       aria-label="Anchor"
                                                                                       data-anchorjs-icon=""
                                                                                       href="https://hexo.fluid-dev.com/posts/fluid-write/#%E7%BB%BC%E5%90%88%E6%BC%94%E7%A4%BA"
                                                                                       style="font: 1em / 1 anchorjs-icons; padding-left: 0.375em;"></a>
                                    </h4>
                                    <p style="text-align:center;color:#8EC0E4;font-size:1.5em;font-weight: bold;">
                                        综合演示
                                        <br>
                                        优雅使用 Fluid 写文章
                                    </p>

                                    <pre><code class="hljs xml"><span class="hljs-tag">&lt;<span
                                                    class="hljs-name">p</span> <span
                                                    class="hljs-attr">style</span>=<span class="hljs-string">"text-align:center;color:#8EC0E4;font-size:1.5em;font-weight: bold;"</span>&gt;</span>
综合演示
<span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
优雅使用 Fluid 写文章
<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span></code><button class="copy-btn copy-btn-dark"
                                                                                      data-clipboard-snippet=""><i
                                                class="iconfont icon-copy"></i><span>Copy</span></button></pre>
                                    <h4 id="iframe-页面镶套"><a
                                            href="https://hexo.fluid-dev.com/posts/fluid-write/#iframe-%E9%A1%B5%E9%9D%A2%E9%95%B6%E5%A5%97"
                                            class="headerlink" title="iframe 页面镶套"></a>iframe 页面镶套<a
                                            class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon=""
                                            href="https://hexo.fluid-dev.com/posts/fluid-write/#iframe-%E9%A1%B5%E9%9D%A2%E9%95%B6%E5%A5%97"
                                            style="font: 1em / 1 anchorjs-icons; padding-left: 0.375em;"></a></h4>
                                    <p>iframe 页面镶套可以帮助我们更好的展示一个页面。比如以下演示页面。</p>
                                    <iframe src="http://blog.test/posts/1" width="100%" height="650" name="topFrame"
                                            scrolling="yes" noresize="noresize" frameborder="0" id="topFrame"></iframe>


                                    <pre><code class="hljs routeros">&lt;iframe <span class="hljs-attribute">src</span>=<span
                                                class="hljs-string">"https://hexo.fluid-dev.com/"</span> <span
                                                class="hljs-attribute">width</span>=<span
                                                class="hljs-string">"100%"</span> <span
                                                class="hljs-attribute">height</span>=<span
                                                class="hljs-string">"500"</span> <span
                                                class="hljs-attribute">name</span>=<span
                                                class="hljs-string">"topFrame"</span> <span class="hljs-attribute">scrolling</span>=<span
                                                class="hljs-string">"yes"</span>  <span
                                                class="hljs-attribute">noresize</span>=<span class="hljs-string">"noresize"</span> <span
                                                class="hljs-attribute">frameborder</span>=<span
                                                class="hljs-string">"0"</span> <span
                                                class="hljs-attribute">id</span>=<span
                                                class="hljs-string">"topFrame"</span>&gt;&lt;/iframe&gt;</code><button
                                            class="copy-btn copy-btn-dark" data-clipboard-snippet=""><i
                                                class="iconfont icon-copy"></i><span>Copy</span></button></pre>
                                    <p>一些参数说明，<code>width="100%"</code> 为宽度自适应，高度请根据实际需求跳转，<strong>注意移动端页面是否匹配。</strong>
                                        <code>scrolling</code> 为滚动条参数。<code>frameborder</code>
                                        为边框参数。<code>noresize</code> 属性规定用户无法调整框架的大小。</p>
                                    <h4 id="details-标签"><a
                                            href="https://hexo.fluid-dev.com/posts/fluid-write/#details-%E6%A0%87%E7%AD%BE"
                                            class="headerlink" title="details 标签"></a>details 标签<a
                                            class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon=""
                                            href="https://hexo.fluid-dev.com/posts/fluid-write/#details-%E6%A0%87%E7%AD%BE"
                                            style="font: 1em / 1 anchorjs-icons; padding-left: 0.375em;"></a></h4>
                                    <p>用于展示代码较多需要折叠或折叠相关内容，以下为演示。<code>summary</code> 填写显示名称。</p>
                                    <details>
                                        <summary>Demo</summary>
                                        <pre><code class="hljs xml"><span class="hljs-tag">&lt;<span
                                                        class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span
                                                        class="hljs-name">b</span>&gt;</span>好友申请备注：fluid<span
                                                    class="hljs-tag">&lt;/<span
                                                        class="hljs-name">b</span>&gt;</span><span class="hljs-tag">&lt;/<span
                                                        class="hljs-name">p</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span
                                                        class="hljs-name">b</span>&gt;</span>提问之前请先仔细查阅用户文档<span
                                                    class="hljs-tag">&lt;/<span
                                                        class="hljs-name">b</span>&gt;</span><span class="hljs-tag">&lt;/<span
                                                        class="hljs-name">p</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">width</span>=<span
        class="hljs-string">"200"</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"https://cdn.jsdelivr.net/gh/fluid-dev/static@master/hexo-theme-fluid/wechat.png"</span> <span
        class="hljs-attr">alt</span>=<span class="hljs-string">"wechat"</span>&gt;</span></code><button
                                                class="copy-btn copy-btn-dark" data-clipboard-snippet=""><i
                                                    class="iconfont icon-copy"></i><span>Copy</span></button></pre>
                                    </details>

                                    <pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">details</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">summary</span>&gt;</span>Demo<span class="hljs-tag">&lt;/<span
                                                    class="hljs-name">summary</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span
                                                    class="hljs-name">b</span>&gt;</span>好友申请备注：fluid<span
                                                class="hljs-tag">&lt;/<span class="hljs-name">b</span>&gt;</span><span
                                                class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span
                                                    class="hljs-name">b</span>&gt;</span>提问之前请先仔细查阅用户文档<span
                                                class="hljs-tag">&lt;/<span class="hljs-name">b</span>&gt;</span><span
                                                class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">width</span>=<span
        class="hljs-string">"200"</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"https://cdn.jsdelivr.net/gh/fluid-dev/static@master/hexo-theme-fluid/wechat.png"</span> <span
        class="hljs-attr">alt</span>=<span class="hljs-string">"wechat"</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">details</span>&gt;</span></code><button
                                            class="copy-btn copy-btn-dark" data-clipboard-snippet=""><i
                                                class="iconfont icon-copy"></i><span>Copy</span></button></pre>
                                    <h3 id="善用-Tag-组件"><a
                                            href="https://hexo.fluid-dev.com/posts/fluid-write/#%E5%96%84%E7%94%A8-Tag-%E7%BB%84%E4%BB%B6"
                                            class="headerlink" title="善用 Tag 组件"></a>善用 Tag 组件<a class="anchorjs-link "
                                                                                                 aria-label="Anchor"
                                                                                                 data-anchorjs-icon=""
                                                                                                 href="https://hexo.fluid-dev.com/posts/fluid-write/#%E5%96%84%E7%94%A8-Tag-%E7%BB%84%E4%BB%B6"
                                                                                                 style="font: 1em / 1 anchorjs-icons; padding-left: 0.375em;"></a>
                                    </h3>
                                    <p>Fluid 内置了许多 Tag
                                        组件，包含便签、行内标签（已知不会出现间隔，谨慎使用）、勾选框、按钮和组图，可以使用这些组件来丰富文章内容，具体点击查看官方文档查看，<strong><a
                                                href="https://hexo.fluid-dev.com/docs/guide/#tag-%E6%8F%92%E4%BB%B6"
                                                target="_blank" rel="noopener external nofollow noreferrer">点击跳转到 Fluid
                                                Doc</a></strong>。</p>
                                    <h2 id="配图"><a
                                            href="https://hexo.fluid-dev.com/posts/fluid-write/#%E9%85%8D%E5%9B%BE"
                                            class="headerlink" title="配图"></a>配图<a class="anchorjs-link "
                                                                                   aria-label="Anchor"
                                                                                   data-anchorjs-icon=""
                                                                                   href="https://hexo.fluid-dev.com/posts/fluid-write/#%E9%85%8D%E5%9B%BE"
                                                                                   style="font: 1em / 1 anchorjs-icons; padding-left: 0.375em;"></a>
                                    </h2>
                                    <p>
                                        众所周知，<strong>博客好不好看，配图占一半</strong>。这里给大家推荐几个我常用找配图的地方。<strong>另外，请遵循相关网站的版权协议。</strong>
                                    </p>
                                    <h3 id="Wallpaper-Hub"><a
                                            href="https://hexo.fluid-dev.com/posts/fluid-write/#Wallpaper-Hub"
                                            class="headerlink" title="Wallpaper Hub"></a>Wallpaper Hub<a
                                            class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon=""
                                            href="https://hexo.fluid-dev.com/posts/fluid-write/#Wallpaper-Hub"
                                            style="font: 1em / 1 anchorjs-icons; padding-left: 0.375em;"></a></h3>
                                    <p><a data-fancybox="images"
                                          href="./搭配 Fluid 如何优雅的写一篇文章 - Hexo Theme Fluid_files/2020-04-17_175244.png"><img
                                                src="./搭配 Fluid 如何优雅的写一篇文章 - Hexo Theme Fluid_files/2020-04-17_175244.png"
                                                srcset="https://cdn.vince.pub/blog-file/photo/2020-04-17_175244.png"
                                                alt="Wallpaper Hub"></a></p>
                                    <p><strong><a href="https://wallpaperhub.app/" target="_blank"
                                                  rel="noopener external nofollow noreferrer">点击跳转到 Wallpaper
                                                Hub</a></strong></p>
                                    <h3 id="Wallhaven"><a href="https://hexo.fluid-dev.com/posts/fluid-write/#Wallhaven"
                                                          class="headerlink" title="Wallhaven"></a>Wallhaven<a
                                            class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon=""
                                            href="https://hexo.fluid-dev.com/posts/fluid-write/#Wallhaven"
                                            style="font: 1em / 1 anchorjs-icons; padding-left: 0.375em;"></a></h3>
                                    <p><a data-fancybox="images"
                                          href="./搭配 Fluid 如何优雅的写一篇文章 - Hexo Theme Fluid_files/2020-04-17_174841.png"><img
                                                src="./搭配 Fluid 如何优雅的写一篇文章 - Hexo Theme Fluid_files/2020-04-17_174841.png"
                                                srcset="https://cdn.vince.pub/blog-file/photo/2020-04-17_174841.png"
                                                alt="Wallhaven"></a></p>
                                    <p><strong><a href="https://wallhaven.cc/" target="_blank"
                                                  rel="noopener external nofollow noreferrer">点击跳转到
                                                Wallhaven</a></strong></p>
                                    <h3 id="Unsplash"><a href="https://hexo.fluid-dev.com/posts/fluid-write/#Unsplash"
                                                         class="headerlink" title="Unsplash"></a>Unsplash<a
                                            class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon=""
                                            href="https://hexo.fluid-dev.com/posts/fluid-write/#Unsplash"
                                            style="font: 1em / 1 anchorjs-icons; padding-left: 0.375em;"></a></h3>
                                    <p><a data-fancybox="images"
                                          href="./搭配 Fluid 如何优雅的写一篇文章 - Hexo Theme Fluid_files/2020-05-14_000557.png"><img
                                                src="./搭配 Fluid 如何优雅的写一篇文章 - Hexo Theme Fluid_files/2020-05-14_000557.png"
                                                srcset="https://cdn.vince.pub/blog-file/photo/2020-05-14_000557.png"
                                                alt="Unsplash"></a></p>
                                    <p><strong><a href="https://unsplash.com/" target="_blank"
                                                  rel="noopener external nofollow noreferrer">点击跳转到
                                                Unsplash</a></strong></p>

                                </div>
                                <hr>
                                <div>
                                    <div class="post-metas mb-3">
                                        <div class="post-meta mr-3">
                                            <i class="iconfont icon-category"></i>
                                            <a class="hover-with-bg"
                                               href="https://hexo.fluid-dev.com/categories/%E5%AE%9E%E7%94%A8%E6%8A%80%E5%B7%A7/">实用技巧</a>
                                        </div>
                                        <div class="post-meta">
                                            <i class="iconfont icon-tags"></i>
                                            <a class="hover-with-bg"
                                               href="https://hexo.fluid-dev.com/tags/%E9%83%A8%E7%BD%B2/">部署</a>
                                            <a class="hover-with-bg"
                                               href="https://hexo.fluid-dev.com/tags/Hexo/">Hexo</a>
                                            <a class="hover-with-bg"
                                               href="https://hexo.fluid-dev.com/tags/%E7%94%A8%E6%88%B7%E7%BB%8F%E9%AA%8C/">用户经验</a>
                                            <a class="hover-with-bg"
                                               href="https://hexo.fluid-dev.com/tags/%E8%8A%B1%E9%87%8C%E8%83%A1%E5%93%A8/">花里胡哨</a>
                                        </div>
                                    </div>

                                    <p class="note note-warning">本博客所有文章除特别声明外，均采用 <a
                                            href="https://creativecommons.org/licenses/by-sa/4.0/deed.zh"
                                            target="_blank" rel="nofollow noopener noopener">CC BY-SA 4.0 协议</a>
                                        ，转载请注明出处！
                                    </p>


                                    <div class="post-prevnext row">
                                        <article class="post-prev col-6">
                                            <a href="https://hexo.fluid-dev.com/posts/fluid-hitokoto/">
                                                <i class="iconfont icon-arrowleft"></i>
                                                <span class="hidden-mobile">在 Fluid 主题首页上加入一言</span>
                                                <span class="visible-mobile">上一篇</span>
                                            </a>
                                        </article>
                                        <article class="post-next col-6">
                                            <a href="https://hexo.fluid-dev.com/posts/hexo-static/">
                                                <span class="hidden-mobile">常见静态网站托管平台使用及多节点部署方案</span>
                                                <span class="visible-mobile">下一篇</span>
                                                <i class="iconfont icon-arrowright"></i>
                                            </a>
                                        </article>
                                    </div>
                                </div>
                                <!-- Comments -->
                            </article>
                        </div>
                    </div>
                </div>

                <div class="d-none d-lg-block col-lg-2 toc-container" id="toc-ctn" style="padding-top: 0px;">
                    <div id="toc" style="visibility: visible;">
                        <p class="toc-header"><i class="iconfont icon-list"></i>&nbsp;目录</p>
                        <div id="tocbot">
                            <ol class="tocbot-list ">
                                <li class="toc-list-item is-active-li"><a
                                        href="https://hexo.fluid-dev.com/posts/hexo-server/#%E5%89%8D%E8%A8%80"
                                        class="tocbot-link node-name--H2  tocbot-active-link">前言</a></li>
                                <li class="toc-list-item"><a
                                        href="https://hexo.fluid-dev.com/posts/hexo-server/#%E4%BA%91%E6%9C%8D%E5%8A%A1%E5%99%A8%E5%A4%87%E4%BB%BD"
                                        class="tocbot-link node-name--H2 ">云服务器备份</a>
                                    <ol class="tocbot-list  tocbot-is-collapsible tocbot-is-collapsed">
                                        <li class="toc-list-item"><a
                                                href="https://hexo.fluid-dev.com/posts/hexo-server/#%E5%85%8D%E5%AF%86git"
                                                class="tocbot-link node-name--H3 ">免密git</a></li>
                                        <li class="toc-list-item"><a
                                                href="https://hexo.fluid-dev.com/posts/hexo-server/#%E8%87%AA%E5%8A%A8%E5%A4%87%E4%BB%BD"
                                                class="tocbot-link node-name--H3 ">自动备份</a></li>
                                    </ol>
                                </li>
                                <li class="toc-list-item"><a
                                        href="https://hexo.fluid-dev.com/posts/hexo-server/#%E8%AE%BF%E9%97%AEJupyter"
                                        class="tocbot-link node-name--H2 ">访问Jupyter</a>
                                    <ol class="tocbot-list  tocbot-is-collapsible tocbot-is-collapsed">
                                        <li class="toc-list-item"><a
                                                href="https://hexo.fluid-dev.com/posts/hexo-server/#%E5%AE%89%E8%A3%85Jupyter"
                                                class="tocbot-link node-name--H3 ">安装Jupyter</a></li>
                                        <li class="toc-list-item"><a
                                                href="https://hexo.fluid-dev.com/posts/hexo-server/#Nginx-%E9%87%8D%E5%AE%9A%E5%90%91"
                                                class="tocbot-link node-name--H3 ">Nginx 重定向</a></li>
                                    </ol>
                                </li>
                                <li class="toc-list-item"><a
                                        href="https://hexo.fluid-dev.com/posts/hexo-server/#%E8%A1%A5%E5%85%85"
                                        class="tocbot-link node-name--H2 ">补充</a>
                                    <ol class="tocbot-list  tocbot-is-collapsible tocbot-is-collapsed">
                                        <li class="toc-list-item"><a
                                                href="https://hexo.fluid-dev.com/posts/hexo-server/#%E6%95%B0%E5%AD%A6%E5%85%AC%E5%BC%8F"
                                                class="tocbot-link node-name--H3 ">数学公式</a></li>
                                        <li class="toc-list-item"><a
                                                href="https://hexo.fluid-dev.com/posts/hexo-server/#%E4%B8%80%E9%94%AE%E4%B8%89%E8%BF%9E"
                                                class="tocbot-link node-name--H3 ">一键三连</a></li>
                                    </ol>
                                </li>
                                <li class="toc-list-item"><a
                                        href="https://hexo.fluid-dev.com/posts/hexo-server/#%E5%8F%82%E8%80%83"
                                        class="tocbot-link node-name--H2 ">参考</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Custom -->
    </main>
@stop
