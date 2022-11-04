<x-guest-layout>

    <div>
        <div class="container mx-auto">
            <div class="pt-16 lg:pt-20">
                <div class="border-b border-grey-lighter pb-8 sm:pb-12">
                    <span
                        class="mb-5 inline-block rounded-full bg-green-light px-2 py-1 font-body text-sm text-green sm:mb-8">category</span>
                    <h2
                        class="block font-body text-3xl font-semibold leading-tight text-primary dark:text-white sm:text-4xl md:text-5xl">
                        {{ $post->title }}
                    </h2>
                    <div class="flex items-center pt-5 sm:pt-8">
                        <p class="pr-2 font-body font-light text-primary dark:text-white">
                            {{ \Carbon\Carbon::parse($post->created_at)->toFormattedDateString() }}
                        </p>
                        @if ($post->minutes != null)
                            <span class="vdark:text-white font-body text-grey">//</span>
                            <p class="pl-2 font-body font-light text-primary dark:text-white">
                                {{ $post->minutes }} min read
                            </p>
                        @endif
                    </div>
                    <div class="flex pt-5 sm:pt-8">
                        <a href="{{ route('post.edit', $post->id) }}"><button
                                class="text-white bg-secondary py-2 px-4 rounded">Edit</button></a>
                    </div>
                </div>
                <div class="prose prose max-w-none border-b border-grey-lighter py-8 dark:prose-dark sm:py-12">

                    {!! $post->body !!}
                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Augue ut lectus arcu bibendum at varius vel pharetra vel. Turpis
                        nunc eget lorem dolor sed viverra ipsum nunc aliquet. Massa placerat duis ultricies lacus sed
                        turpis tincidunt. Cursus sit amet dictum sit amet justo donec enim. Nec dui nunc mattis enim ut
                        tellus elementum sagittis vitae. Id semper risus in hendrerit gravida rutrum quisque. Posuere ac
                        ut consequat semper viverra nam libero justo laoreet. Turpis cursus in hac habitasse platea.</p>

                    <p>Elit ullamcorper dignissim cras tincidunt lobortis feugiat vivamus at augue. Pellentesque massa
                        placerat duis ultricies lacus sed. Interdum velit laoreet id donec ultrices tincidunt arcu non.
                        Id diam maecenas ultricies mi eget mauris. Urna id volutpat lacus laoreet non. Amet est placerat
                        in egestas erat imperdiet sed euismod. Dui sapien eget mi proin sed libero enim sed faucibus.
                        Facilisis mauris sit amet massa vitae. Vitae congue mauris rhoncus aenean vel elit. Ut etiam sit
                        amet nisl. Commodo odio aenean sed adipiscing diam donec adipiscing tristique.</p>

                    <p>Non odio euismod lacinia at quis risus. Elit duis tristique sollicitudin nibh sit amet commodo.
                        Aliquam ultrices sagittis orci a scelerisque purus semper eget duis. Ipsum consequat nisl vel
                        pretium lectus. Pretium vulputate sapien nec sagittis aliquam. Morbi tincidunt augue interdum
                        velit euismod in pellentesque massa. Nullam non nisi est sit.</p>

                    <blockquote>
                        <p>Note: Some of the earlier articles may be amateur and have information that I wouldn’t
                            necessarily put into an article on the subject if I wrote it today.</p>
                    </blockquote>

                    <h3 id="lorem-ipsum-dolor-sit-amet">Lorem ipsum dolor sit amet</h3>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Amet aliquam id diam maecenas ultricies mi eget mauris pharetra.
                        Congue nisi vitae suscipit tellus.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua:</p>

                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</li>
                    </ul>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Risus viverra adipiscing at in tellus. Proin libero nunc
                        consequat interdum. Sed arcu non odio euismod lacinia at quis.</p>

                    <div class="twitter-card">
                        <h4 class="twitter-card-title"> "When gone am I, the last of the Jedi will you be. The Force
                            runs strong in your family. Pass on what you have learned."</h4>
                        <span class="twitter-card-source">— Episode 6, Return of the Jedi</span>
                        <button class="twitter-card-btn">Share this on Twitter</button>
                    </div>

                    <p>It’s great that I learned all that, because for my first real job in the industry, I was going to
                        use practically none of it. No Git, no Node, no Sass, no Grunt nor Gulp, no command line, no
                        Bootstrap. Just cold, hard WordPress. Nonetheless, this was going to present a and things to
                        learn.&lt;/p&gt;</p>

                    <h3 id="sed-do-eiusmod-tempor-incididunt">Sed do eiusmod tempor incididunt</h3>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Enim lobortis scelerisque fermentum dui faucibus in ornare quam
                        viverra. Augue ut lectus arcu bibendum at varius vel. Lacus viverra vitae congue eu consequat ac
                        felis.</p>

                    <p><img src="/assets/img/post-image-01.png" alt="Image" /></p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Condimentum id venenatis a condimentum vitae sapien pellentesque
                        habitant morbi. Semper feugiat nibh sed pulvinar.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Vel pretium lectus quam id leo in. Ullamcorper dignissim cras
                        tincidunt lobortis feugiat vivamus at augue eget.</p>

                    <h3 id="ullamcorper-dignissim-cras-tincidunt">Ullamcorper dignissim cras tincidunt</h3>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Laoreet non curabitur gravida arcu ac tortor dignissim convallis
                        aenean. Integer enim neque volutpat ac tincidunt vitae semper quis lectus.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, <a href="/">sed do eiusmod tempor
                            incididunt ut</a> labore et dolore magna aliqua. Leo a diam sollicitudin tempor id eu nisl
                        nunc.</p>

                    <div class="language-js highlighter-rouge">
                        <div class="highlight">
                            <pre class="highlight"><code><span class="kd">const</span> <span class="nx">btn</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="dl">'</span><span class="s1">btn</span><span class="dl">'</span><span class="p">)</span>
<span class="kd">let</span> <span class="nx">count</span> <span class="o">=</span> <span class="mi">0</span>
<span class="kd">function</span> <span class="nx">render</span><span class="p">()</span> <span class="p">{</span>
  <span class="nx">btn</span><span class="p">.</span><span class="nx">innerText</span> <span class="o">=</span> <span class="s2">`Count: </span><span class="p">${</span><span class="nx">count</span><span class="p">}</span><span class="s2">`</span>
<span class="p">}</span>
<span class="nx">btn</span><span class="p">.</span><span class="nx">addEventListener</span><span class="p">(</span><span class="dl">'</span><span class="s1">click</span><span class="dl">'</span><span class="p">,</span> <span class="p">()</span> <span class="o">=&gt;</span> <span class="p">{</span>
  <span class="c1">// Count from 1 to 10.</span>
  <span class="k">if</span> <span class="p">(</span><span class="nx">count</span> <span class="o">&lt;</span> <span class="mi">10</span><span class="p">)</span> <span class="p">{</span>
    <span class="nx">count</span> <span class="o">+=</span> <span class="mi">1</span>
    <span class="nx">render</span><span class="p">()</span>
  <span class="p">}</span>
</code></pre>
                        </div>
                    </div>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p> --}}

                </div>

                {{-- <div class="flex items-center py-10">
                    <span class="pr-5 font-body font-medium text-primary dark:text-white">Share</span>
                    <a href="/">
                        <i
                            class="bx bxl-facebook text-2xl text-primary transition-colors hover:text-secondary dark:text-white dark:hover:text-secondary"></i></a>
                    <a href="/">
                        <i
                            class="bx bxl-twitter pl-2 text-2xl text-primary transition-colors hover:text-secondary dark:text-white dark:hover:text-secondary"></i>
                    </a>
                    <a href="/">
                        <i
                            class="bx bxl-linkedin pl-2 text-2xl text-primary transition-colors hover:text-secondary dark:text-white dark:hover:text-secondary"></i></a>
                    <a href="/">
                        <i
                            class="bx bxl-reddit pl-2 text-2xl text-primary transition-colors hover:text-secondary dark:text-white dark:hover:text-secondary"></i></a>
                </div> --}}
            </div>
        </div>

</x-guest-layout>
