<section class="wrapper hide-right"><aside class="svelte-qjien1"> <ul class="svelte-1banbqx"><li class="folder"><a href="javascript:;" class="sidebar-list-link name svelte-1banbqx"><span>Relatórios</span></a> </li><li class="folder"><a href="javascript:;" class="sidebar-list-link name svelte-1banbqx"><span>Corredores</span></a> </li><li class="folder"><a href="javascript:;" class="sidebar-list-link name svelte-1banbqx"><span>Provas</span></a> </li><li class="folder"><a href="javascript:;" class="sidebar-list-link name svelte-1banbqx"><span>Corredor Provas</span></a> </li><li class="folder"><a href="javascript:;" class="sidebar-list-link name svelte-1banbqx"><span>Corredor Resultados</span></a> </li><li class="folder"><a href="javascript:;" class="sidebar-list-link name svelte-1banbqx"><span>Login</span></a> </li> </ul></aside> <section class="content svelte-uhjpwm"><div class="row"><div class="left"><h1>DeliverIt</h1> </div> <div class="right"><div class="language-selector svelte-uhjpwm"><div class="selectContainer  svelte-1ik40xa" style=""> <input autocomplete="off" autocorrect="off" spellcheck="false" readonly="true" placeholder="" class="svelte-1ik40xa" style=""> <div class="selectedItem svelte-1ik40xa"><div class="selection">JavaScript/Deno (fetch)</div></div>  <div class="indicator svelte-1ik40xa"><svg width="100%" height="100%" viewBox="0 0 20 20" focusable="false" class="css-19bqh2r svelte-1ik40xa"><path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path></svg></div> </div></div></div></div> <div class="row"><div class="left"><h2>Relatórios</h2>  <hr></div> <div class="right"></div></div> <div class="row"><div class="left"><div class="anchor svelte-fapltk" id="req_a10045eeba134ea2bab7d95d5d062e2f">&nbsp;</div> <h3 class="request-title"><strong class="get svelte-fapltk">GET</strong> ranking Idade</h3> <pre class="url svelte-fapltk">{{ _.base_url }}/corredor-resultados/ranking/idade</pre>  <div class="tables"> <div class="table svelte-1wblyuk"><div class="header svelte-1wblyuk"><span class="title svelte-1wblyuk">Headers</span> </div>  <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Authorization</div> <div class="value svelte-1wblyuk">{{ _.token }}</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Accept</div> <div class="value svelte-1wblyuk">application/json</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Content-Type</div> <div class="value svelte-1wblyuk">application/json</div></div> </div> </div> <hr></div> <div class="right"><div class="code-example svelte-fapltk"><div class="header svelte-fapltk"><div class="title svelte-fapltk">Example request:</div> <div class="copy"><a href="javascript:" class="svelte-fapltk">Copy to clipboard</a></div></div> <pre class="svelte-fapltk"><code class="javascript hljs">fetch(<span class="hljs-string">"{{ _.base_url }}/corredor-resultados/ranking/idade"</span>, {
  <span class="hljs-string">"method"</span>: <span class="hljs-string">"GET"</span>,
  <span class="hljs-string">"headers"</span>: {
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"{{ _.token }}"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>
  },
  <span class="hljs-string">"body"</span>: <span class="hljs-literal">null</span>
})
  .then(<span class="hljs-function"><span class="hljs-params">response</span> =&gt;</span> <span class="hljs-built_in">console</span>.log(response))
  .catch(<span class="hljs-function"><span class="hljs-params">err</span> =&gt;</span> <span class="hljs-built_in">console</span>.error(err));</code></pre></div> </div></div><div class="row"><div class="left"><div class="anchor svelte-fapltk" id="req_ccc4d4609947410a969ced576de235ab">&nbsp;</div> <h3 class="request-title"><strong class="get svelte-fapltk">GET</strong> ranking</h3> <pre class="url svelte-fapltk">{{ _.base_url }}/corredor-resultados/ranking</pre>  <div class="tables"> <div class="table svelte-1wblyuk"><div class="header svelte-1wblyuk"><span class="title svelte-1wblyuk">Headers</span> </div>  <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Authorization</div> <div class="value svelte-1wblyuk">{{ _.token }}</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Accept</div> <div class="value svelte-1wblyuk">application/json</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Content-Type</div> <div class="value svelte-1wblyuk">application/json</div></div> </div> </div> <hr></div> <div class="right"><div class="code-example svelte-fapltk"><div class="header svelte-fapltk"><div class="title svelte-fapltk">Example request:</div> <div class="copy"><a href="javascript:" class="svelte-fapltk">Copy to clipboard</a></div></div> <pre class="svelte-fapltk"><code class="javascript hljs">fetch(<span class="hljs-string">"{{ _.base_url }}/corredor-resultados/ranking"</span>, {
  <span class="hljs-string">"method"</span>: <span class="hljs-string">"GET"</span>,
  <span class="hljs-string">"headers"</span>: {
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"{{ _.token }}"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>
  },
  <span class="hljs-string">"body"</span>: <span class="hljs-literal">null</span>
})
  .then(<span class="hljs-function"><span class="hljs-params">response</span> =&gt;</span> <span class="hljs-built_in">console</span>.log(response))
  .catch(<span class="hljs-function"><span class="hljs-params">err</span> =&gt;</span> <span class="hljs-built_in">console</span>.error(err));</code></pre></div> </div></div><div class="row"><div class="left"><h2>Corredores</h2>  <hr></div> <div class="right"></div></div> <div class="row"><div class="left"><div class="anchor svelte-fapltk" id="req_8f84b7fce12c49d29a050341d2462d06">&nbsp;</div> <h3 class="request-title"><strong class="get svelte-fapltk">GET</strong> table</h3> <pre class="url svelte-fapltk">{{ _.base_url }}/corredores/?rows=10</pre>  <div class="tables"> <div class="table svelte-1wblyuk"><div class="header svelte-1wblyuk"><span class="title svelte-1wblyuk">Headers</span> </div>  <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Authorization</div> <div class="value svelte-1wblyuk">{{ _.token }}</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Accept</div> <div class="value svelte-1wblyuk">application/json</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Content-Type</div> <div class="value svelte-1wblyuk">application/json</div></div> </div> </div> <hr></div> <div class="right"><div class="code-example svelte-fapltk"><div class="header svelte-fapltk"><div class="title svelte-fapltk">Example request:</div> <div class="copy"><a href="javascript:" class="svelte-fapltk">Copy to clipboard</a></div></div> <pre class="svelte-fapltk"><code class="javascript hljs">fetch(<span class="hljs-string">"{{ _.base_url }}/corredores/?rows=10"</span>, {
  <span class="hljs-string">"method"</span>: <span class="hljs-string">"GET"</span>,
  <span class="hljs-string">"headers"</span>: {
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"{{ _.token }}"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>
  },
  <span class="hljs-string">"body"</span>: <span class="hljs-literal">null</span>
})
  .then(<span class="hljs-function"><span class="hljs-params">response</span> =&gt;</span> <span class="hljs-built_in">console</span>.log(response))
  .catch(<span class="hljs-function"><span class="hljs-params">err</span> =&gt;</span> <span class="hljs-built_in">console</span>.error(err));</code></pre></div> </div></div><div class="row"><div class="left"><div class="anchor svelte-fapltk" id="req_4168d3f6b6d84ea69bd0bea3683bab06">&nbsp;</div> <h3 class="request-title"><strong class="post svelte-fapltk">POST</strong> create</h3> <pre class="url svelte-fapltk">{{ _.base_url }}/corredores/</pre>  <div class="tables"> <div class="table svelte-1wblyuk"><div class="header svelte-1wblyuk"><span class="title svelte-1wblyuk">Headers</span> </div>  <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Authorization</div> <div class="value svelte-1wblyuk">{{ _.token }}</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Accept</div> <div class="value svelte-1wblyuk">application/json</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Content-Type</div> <div class="value svelte-1wblyuk">application/json</div></div> </div> <div class="table svelte-1wblyuk"><div class="header svelte-1wblyuk"><span class="title svelte-1wblyuk">Body</span> <span class="note svelte-1wblyuk">json</span></div> <div class="raw-data"><pre>{
  "nome": "Alessandra Emilly Sandra da Luz",
  "cpf": "413.645.558-59",
  "data_nascimento": "23/04/1988"
}</pre></div> </div></div> <hr></div> <div class="right"><div class="code-example svelte-fapltk"><div class="header svelte-fapltk"><div class="title svelte-fapltk">Example request:</div> <div class="copy"><a href="javascript:" class="svelte-fapltk">Copy to clipboard</a></div></div> <pre class="svelte-fapltk"><code class="javascript hljs">fetch(<span class="hljs-string">"{{ _.base_url }}/corredores/"</span>, {
  <span class="hljs-string">"method"</span>: <span class="hljs-string">"POST"</span>,
  <span class="hljs-string">"headers"</span>: {
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"{{ _.token }}"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>
  },
  <span class="hljs-string">"body"</span>: {
    <span class="hljs-string">"nome"</span>: <span class="hljs-string">"Alessandra Emilly Sandra da Luz"</span>,
    <span class="hljs-string">"cpf"</span>: <span class="hljs-string">"413.645.558-59"</span>,
    <span class="hljs-string">"data_nascimento"</span>: <span class="hljs-string">"23/04/1988"</span>
  }
})
  .then(<span class="hljs-function"><span class="hljs-params">response</span> =&gt;</span> <span class="hljs-built_in">console</span>.log(response))
  .catch(<span class="hljs-function"><span class="hljs-params">err</span> =&gt;</span> <span class="hljs-built_in">console</span>.error(err));</code></pre></div> </div></div><div class="row"><div class="left"><div class="anchor svelte-fapltk" id="req_9ed916a65a7e4f74beeb49cb4076af0d">&nbsp;</div> <h3 class="request-title"><strong class="patch svelte-fapltk">PATCH</strong> update</h3> <pre class="url svelte-fapltk">{{ _.base_url }}/corredores/1</pre>  <div class="tables"> <div class="table svelte-1wblyuk"><div class="header svelte-1wblyuk"><span class="title svelte-1wblyuk">Headers</span> </div>  <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Authorization</div> <div class="value svelte-1wblyuk">{{ _.token }}</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Accept</div> <div class="value svelte-1wblyuk">application/json</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Content-Type</div> <div class="value svelte-1wblyuk">application/json</div></div> </div> <div class="table svelte-1wblyuk"><div class="header svelte-1wblyuk"><span class="title svelte-1wblyuk">Body</span> <span class="note svelte-1wblyuk">json</span></div> <div class="raw-data"><pre>{
  "nome": "Alessandra Emilly Sandra da Luz",
  "cpf": "413.645.558-59",
  "data_nascimento": "23/04/1988"
}</pre></div> </div></div> <hr></div> <div class="right"><div class="code-example svelte-fapltk"><div class="header svelte-fapltk"><div class="title svelte-fapltk">Example request:</div> <div class="copy"><a href="javascript:" class="svelte-fapltk">Copy to clipboard</a></div></div> <pre class="svelte-fapltk"><code class="javascript hljs">fetch(<span class="hljs-string">"{{ _.base_url }}/corredores/1"</span>, {
  <span class="hljs-string">"method"</span>: <span class="hljs-string">"PATCH"</span>,
  <span class="hljs-string">"headers"</span>: {
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"{{ _.token }}"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>
  },
  <span class="hljs-string">"body"</span>: {
    <span class="hljs-string">"nome"</span>: <span class="hljs-string">"Alessandra Emilly Sandra da Luz"</span>,
    <span class="hljs-string">"cpf"</span>: <span class="hljs-string">"413.645.558-59"</span>,
    <span class="hljs-string">"data_nascimento"</span>: <span class="hljs-string">"23/04/1988"</span>
  }
})
  .then(<span class="hljs-function"><span class="hljs-params">response</span> =&gt;</span> <span class="hljs-built_in">console</span>.log(response))
  .catch(<span class="hljs-function"><span class="hljs-params">err</span> =&gt;</span> <span class="hljs-built_in">console</span>.error(err));</code></pre></div> </div></div><div class="row"><div class="left"><div class="anchor svelte-fapltk" id="req_f9bf77da6199429abf30e7b56581fac2">&nbsp;</div> <h3 class="request-title"><strong class="get svelte-fapltk">GET</strong> show</h3> <pre class="url svelte-fapltk">{{ _.base_url }}/corredores/1</pre>  <div class="tables"> <div class="table svelte-1wblyuk"><div class="header svelte-1wblyuk"><span class="title svelte-1wblyuk">Headers</span> </div>  <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Authorization</div> <div class="value svelte-1wblyuk">{{ _.token }}</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Accept</div> <div class="value svelte-1wblyuk">application/json</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Content-Type</div> <div class="value svelte-1wblyuk">application/json</div></div> </div> </div> <hr></div> <div class="right"><div class="code-example svelte-fapltk"><div class="header svelte-fapltk"><div class="title svelte-fapltk">Example request:</div> <div class="copy"><a href="javascript:" class="svelte-fapltk">Copy to clipboard</a></div></div> <pre class="svelte-fapltk"><code class="javascript hljs">fetch(<span class="hljs-string">"{{ _.base_url }}/corredores/1"</span>, {
  <span class="hljs-string">"method"</span>: <span class="hljs-string">"GET"</span>,
  <span class="hljs-string">"headers"</span>: {
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"{{ _.token }}"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>
  },
  <span class="hljs-string">"body"</span>: <span class="hljs-literal">null</span>
})
  .then(<span class="hljs-function"><span class="hljs-params">response</span> =&gt;</span> <span class="hljs-built_in">console</span>.log(response))
  .catch(<span class="hljs-function"><span class="hljs-params">err</span> =&gt;</span> <span class="hljs-built_in">console</span>.error(err));</code></pre></div> </div></div><div class="row"><div class="left"><div class="anchor svelte-fapltk" id="req_5f43647dde8b4138b9c109c5f28d4d3e">&nbsp;</div> <h3 class="request-title"><strong class="delete svelte-fapltk">DELETE</strong> delete</h3> <pre class="url svelte-fapltk">{{ _.base_url }}/corredores/1</pre>  <div class="tables"> <div class="table svelte-1wblyuk"><div class="header svelte-1wblyuk"><span class="title svelte-1wblyuk">Headers</span> </div>  <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Authorization</div> <div class="value svelte-1wblyuk">{{ _.token }}</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Accept</div> <div class="value svelte-1wblyuk">application/json</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Content-Type</div> <div class="value svelte-1wblyuk">application/json</div></div> </div> </div> <hr></div> <div class="right"><div class="code-example svelte-fapltk"><div class="header svelte-fapltk"><div class="title svelte-fapltk">Example request:</div> <div class="copy"><a href="javascript:" class="svelte-fapltk">Copy to clipboard</a></div></div> <pre class="svelte-fapltk"><code class="javascript hljs">fetch(<span class="hljs-string">"{{ _.base_url }}/corredores/1"</span>, {
  <span class="hljs-string">"method"</span>: <span class="hljs-string">"DELETE"</span>,
  <span class="hljs-string">"headers"</span>: {
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"{{ _.token }}"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>
  },
  <span class="hljs-string">"body"</span>: <span class="hljs-literal">null</span>
})
  .then(<span class="hljs-function"><span class="hljs-params">response</span> =&gt;</span> <span class="hljs-built_in">console</span>.log(response))
  .catch(<span class="hljs-function"><span class="hljs-params">err</span> =&gt;</span> <span class="hljs-built_in">console</span>.error(err));</code></pre></div> </div></div><div class="row"><div class="left"><h2>Provas</h2>  <hr></div> <div class="right"></div></div> <div class="row"><div class="left"><div class="anchor svelte-fapltk" id="req_69beca64d14d4553b683c38dc786a158">&nbsp;</div> <h3 class="request-title"><strong class="get svelte-fapltk">GET</strong> table</h3> <pre class="url svelte-fapltk">{{ _.base_url }}/provas/?rows=10</pre>  <div class="tables"> <div class="table svelte-1wblyuk"><div class="header svelte-1wblyuk"><span class="title svelte-1wblyuk">Headers</span> </div>  <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Authorization</div> <div class="value svelte-1wblyuk">{{ _.token }}</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Accept</div> <div class="value svelte-1wblyuk">application/json</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Content-Type</div> <div class="value svelte-1wblyuk">application/json</div></div> </div> </div> <hr></div> <div class="right"><div class="code-example svelte-fapltk"><div class="header svelte-fapltk"><div class="title svelte-fapltk">Example request:</div> <div class="copy"><a href="javascript:" class="svelte-fapltk">Copy to clipboard</a></div></div> <pre class="svelte-fapltk"><code class="javascript hljs">fetch(<span class="hljs-string">"{{ _.base_url }}/provas/?rows=10"</span>, {
  <span class="hljs-string">"method"</span>: <span class="hljs-string">"GET"</span>,
  <span class="hljs-string">"headers"</span>: {
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"{{ _.token }}"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>
  },
  <span class="hljs-string">"body"</span>: <span class="hljs-literal">null</span>
})
  .then(<span class="hljs-function"><span class="hljs-params">response</span> =&gt;</span> <span class="hljs-built_in">console</span>.log(response))
  .catch(<span class="hljs-function"><span class="hljs-params">err</span> =&gt;</span> <span class="hljs-built_in">console</span>.error(err));</code></pre></div> </div></div><div class="row"><div class="left"><div class="anchor svelte-fapltk" id="req_d604219569ad4c0bb0b5065f41facfff">&nbsp;</div> <h3 class="request-title"><strong class="post svelte-fapltk">POST</strong> create</h3> <pre class="url svelte-fapltk">{{ _.base_url }}/provas/</pre>  <div class="tables"> <div class="table svelte-1wblyuk"><div class="header svelte-1wblyuk"><span class="title svelte-1wblyuk">Headers</span> </div>  <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Authorization</div> <div class="value svelte-1wblyuk">{{ _.token }}</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Accept</div> <div class="value svelte-1wblyuk">application/json</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Content-Type</div> <div class="value svelte-1wblyuk">application/json</div></div> </div> <div class="table svelte-1wblyuk"><div class="header svelte-1wblyuk"><span class="title svelte-1wblyuk">Body</span> <span class="note svelte-1wblyuk">json</span></div> <div class="raw-data"><pre>{
  "tipo_prova_id": "2",
  "data_prova": "04/02/2021"
}</pre></div> </div></div> <hr></div> <div class="right"><div class="code-example svelte-fapltk"><div class="header svelte-fapltk"><div class="title svelte-fapltk">Example request:</div> <div class="copy"><a href="javascript:" class="svelte-fapltk">Copy to clipboard</a></div></div> <pre class="svelte-fapltk"><code class="javascript hljs">fetch(<span class="hljs-string">"{{ _.base_url }}/provas/"</span>, {
  <span class="hljs-string">"method"</span>: <span class="hljs-string">"POST"</span>,
  <span class="hljs-string">"headers"</span>: {
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"{{ _.token }}"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>
  },
  <span class="hljs-string">"body"</span>: {
    <span class="hljs-string">"tipo_prova_id"</span>: <span class="hljs-string">"2"</span>,
    <span class="hljs-string">"data_prova"</span>: <span class="hljs-string">"04/02/2021"</span>
  }
})
  .then(<span class="hljs-function"><span class="hljs-params">response</span> =&gt;</span> <span class="hljs-built_in">console</span>.log(response))
  .catch(<span class="hljs-function"><span class="hljs-params">err</span> =&gt;</span> <span class="hljs-built_in">console</span>.error(err));</code></pre></div> </div></div><div class="row"><div class="left"><div class="anchor svelte-fapltk" id="req_f68dc9b426ad4e1399cb36f295a016ea">&nbsp;</div> <h3 class="request-title"><strong class="patch svelte-fapltk">PATCH</strong> update</h3> <pre class="url svelte-fapltk">{{ _.base_url }}/provas/5</pre>  <div class="tables"> <div class="table svelte-1wblyuk"><div class="header svelte-1wblyuk"><span class="title svelte-1wblyuk">Headers</span> </div>  <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Authorization</div> <div class="value svelte-1wblyuk">{{ _.token }}</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Accept</div> <div class="value svelte-1wblyuk">application/json</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Content-Type</div> <div class="value svelte-1wblyuk">application/json</div></div> </div> <div class="table svelte-1wblyuk"><div class="header svelte-1wblyuk"><span class="title svelte-1wblyuk">Body</span> <span class="note svelte-1wblyuk">json</span></div> <div class="raw-data"><pre>{
  "tipo_prova_id": "1",
  "data_prova": "02/02/2021"
}</pre></div> </div></div> <hr></div> <div class="right"><div class="code-example svelte-fapltk"><div class="header svelte-fapltk"><div class="title svelte-fapltk">Example request:</div> <div class="copy"><a href="javascript:" class="svelte-fapltk">Copy to clipboard</a></div></div> <pre class="svelte-fapltk"><code class="javascript hljs">fetch(<span class="hljs-string">"{{ _.base_url }}/provas/5"</span>, {
  <span class="hljs-string">"method"</span>: <span class="hljs-string">"PATCH"</span>,
  <span class="hljs-string">"headers"</span>: {
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"{{ _.token }}"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>
  },
  <span class="hljs-string">"body"</span>: {
    <span class="hljs-string">"tipo_prova_id"</span>: <span class="hljs-string">"1"</span>,
    <span class="hljs-string">"data_prova"</span>: <span class="hljs-string">"02/02/2021"</span>
  }
})
  .then(<span class="hljs-function"><span class="hljs-params">response</span> =&gt;</span> <span class="hljs-built_in">console</span>.log(response))
  .catch(<span class="hljs-function"><span class="hljs-params">err</span> =&gt;</span> <span class="hljs-built_in">console</span>.error(err));</code></pre></div> </div></div><div class="row"><div class="left"><div class="anchor svelte-fapltk" id="req_4bcf4e98ae85493e84cfdb5bed40f1fd">&nbsp;</div> <h3 class="request-title"><strong class="get svelte-fapltk">GET</strong> show</h3> <pre class="url svelte-fapltk">{{ _.base_url }}/provas/5</pre>  <div class="tables"> <div class="table svelte-1wblyuk"><div class="header svelte-1wblyuk"><span class="title svelte-1wblyuk">Headers</span> </div>  <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Authorization</div> <div class="value svelte-1wblyuk">{{ _.token }}</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Accept</div> <div class="value svelte-1wblyuk">application/json</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Content-Type</div> <div class="value svelte-1wblyuk">application/json</div></div> </div> </div> <hr></div> <div class="right"><div class="code-example svelte-fapltk"><div class="header svelte-fapltk"><div class="title svelte-fapltk">Example request:</div> <div class="copy"><a href="javascript:" class="svelte-fapltk">Copy to clipboard</a></div></div> <pre class="svelte-fapltk"><code class="javascript hljs">fetch(<span class="hljs-string">"{{ _.base_url }}/provas/5"</span>, {
  <span class="hljs-string">"method"</span>: <span class="hljs-string">"GET"</span>,
  <span class="hljs-string">"headers"</span>: {
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"{{ _.token }}"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>
  },
  <span class="hljs-string">"body"</span>: <span class="hljs-literal">null</span>
})
  .then(<span class="hljs-function"><span class="hljs-params">response</span> =&gt;</span> <span class="hljs-built_in">console</span>.log(response))
  .catch(<span class="hljs-function"><span class="hljs-params">err</span> =&gt;</span> <span class="hljs-built_in">console</span>.error(err));</code></pre></div> </div></div><div class="row"><div class="left"><div class="anchor svelte-fapltk" id="req_e8d16ea96a274485b9efa8e7c1723d49">&nbsp;</div> <h3 class="request-title"><strong class="delete svelte-fapltk">DELETE</strong> delete</h3> <pre class="url svelte-fapltk">{{ _.base_url }}/provas/1</pre>  <div class="tables"> <div class="table svelte-1wblyuk"><div class="header svelte-1wblyuk"><span class="title svelte-1wblyuk">Headers</span> </div>  <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Authorization</div> <div class="value svelte-1wblyuk">{{ _.token }}</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Accept</div> <div class="value svelte-1wblyuk">application/json</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Content-Type</div> <div class="value svelte-1wblyuk">application/json</div></div> </div> </div> <hr></div> <div class="right"><div class="code-example svelte-fapltk"><div class="header svelte-fapltk"><div class="title svelte-fapltk">Example request:</div> <div class="copy"><a href="javascript:" class="svelte-fapltk">Copy to clipboard</a></div></div> <pre class="svelte-fapltk"><code class="javascript hljs">fetch(<span class="hljs-string">"{{ _.base_url }}/provas/1"</span>, {
  <span class="hljs-string">"method"</span>: <span class="hljs-string">"DELETE"</span>,
  <span class="hljs-string">"headers"</span>: {
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"{{ _.token }}"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>
  },
  <span class="hljs-string">"body"</span>: <span class="hljs-literal">null</span>
})
  .then(<span class="hljs-function"><span class="hljs-params">response</span> =&gt;</span> <span class="hljs-built_in">console</span>.log(response))
  .catch(<span class="hljs-function"><span class="hljs-params">err</span> =&gt;</span> <span class="hljs-built_in">console</span>.error(err));</code></pre></div> </div></div><div class="row"><div class="left"><h2>Corredor Provas</h2>  <hr></div> <div class="right"></div></div> <div class="row"><div class="left"><div class="anchor svelte-fapltk" id="req_b596941ffd5e4f9494c203af573b0e97">&nbsp;</div> <h3 class="request-title"><strong class="get svelte-fapltk">GET</strong> table</h3> <pre class="url svelte-fapltk">{{ _.base_url }}/corredor-provas/?rows=10</pre>  <div class="tables"> <div class="table svelte-1wblyuk"><div class="header svelte-1wblyuk"><span class="title svelte-1wblyuk">Headers</span> </div>  <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Authorization</div> <div class="value svelte-1wblyuk">{{ _.token }}</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Accept</div> <div class="value svelte-1wblyuk">application/json</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Content-Type</div> <div class="value svelte-1wblyuk">application/json</div></div> </div> </div> <hr></div> <div class="right"><div class="code-example svelte-fapltk"><div class="header svelte-fapltk"><div class="title svelte-fapltk">Example request:</div> <div class="copy"><a href="javascript:" class="svelte-fapltk">Copy to clipboard</a></div></div> <pre class="svelte-fapltk"><code class="javascript hljs">fetch(<span class="hljs-string">"{{ _.base_url }}/corredor-provas/?rows=10"</span>, {
  <span class="hljs-string">"method"</span>: <span class="hljs-string">"GET"</span>,
  <span class="hljs-string">"headers"</span>: {
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"{{ _.token }}"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>
  },
  <span class="hljs-string">"body"</span>: <span class="hljs-literal">null</span>
})
  .then(<span class="hljs-function"><span class="hljs-params">response</span> =&gt;</span> <span class="hljs-built_in">console</span>.log(response))
  .catch(<span class="hljs-function"><span class="hljs-params">err</span> =&gt;</span> <span class="hljs-built_in">console</span>.error(err));</code></pre></div> </div></div><div class="row"><div class="left"><div class="anchor svelte-fapltk" id="req_3375bcf99f24479d962816a9951b7dd6">&nbsp;</div> <h3 class="request-title"><strong class="post svelte-fapltk">POST</strong> create</h3> <pre class="url svelte-fapltk">{{ _.base_url }}/corredor-provas/</pre>  <div class="tables"> <div class="table svelte-1wblyuk"><div class="header svelte-1wblyuk"><span class="title svelte-1wblyuk">Headers</span> </div>  <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Authorization</div> <div class="value svelte-1wblyuk">{{ _.token }}</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Accept</div> <div class="value svelte-1wblyuk">application/json</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Content-Type</div> <div class="value svelte-1wblyuk">application/json</div></div> </div> <div class="table svelte-1wblyuk"><div class="header svelte-1wblyuk"><span class="title svelte-1wblyuk">Body</span> <span class="note svelte-1wblyuk">json</span></div> <div class="raw-data"><pre>{
  "prova_id": "10",
  "corredor_id": "2"
}</pre></div> </div></div> <hr></div> <div class="right"><div class="code-example svelte-fapltk"><div class="header svelte-fapltk"><div class="title svelte-fapltk">Example request:</div> <div class="copy"><a href="javascript:" class="svelte-fapltk">Copy to clipboard</a></div></div> <pre class="svelte-fapltk"><code class="javascript hljs">fetch(<span class="hljs-string">"{{ _.base_url }}/corredor-provas/"</span>, {
  <span class="hljs-string">"method"</span>: <span class="hljs-string">"POST"</span>,
  <span class="hljs-string">"headers"</span>: {
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"{{ _.token }}"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>
  },
  <span class="hljs-string">"body"</span>: {
    <span class="hljs-string">"prova_id"</span>: <span class="hljs-string">"10"</span>,
    <span class="hljs-string">"corredor_id"</span>: <span class="hljs-string">"2"</span>
  }
})
  .then(<span class="hljs-function"><span class="hljs-params">response</span> =&gt;</span> <span class="hljs-built_in">console</span>.log(response))
  .catch(<span class="hljs-function"><span class="hljs-params">err</span> =&gt;</span> <span class="hljs-built_in">console</span>.error(err));</code></pre></div> </div></div><div class="row"><div class="left"><div class="anchor svelte-fapltk" id="req_05247d4c8d364bed822cd688fee7288d">&nbsp;</div> <h3 class="request-title"><strong class="patch svelte-fapltk">PATCH</strong> update</h3> <pre class="url svelte-fapltk">{{ _.base_url }}/corredor-provas/1</pre>  <div class="tables"> <div class="table svelte-1wblyuk"><div class="header svelte-1wblyuk"><span class="title svelte-1wblyuk">Headers</span> </div>  <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Authorization</div> <div class="value svelte-1wblyuk">{{ _.token }}</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Accept</div> <div class="value svelte-1wblyuk">application/json</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Content-Type</div> <div class="value svelte-1wblyuk">application/json</div></div> </div> <div class="table svelte-1wblyuk"><div class="header svelte-1wblyuk"><span class="title svelte-1wblyuk">Body</span> <span class="note svelte-1wblyuk">json</span></div> <div class="raw-data"><pre>{
  "prova_id": "1",
  "corredor_id": "1",
  "relations": {
    "corredorResultado": [
      {
        "corredor_prova_id": "1",
        "horario_inicio": "12:00:00",
        "horario_fim": "12:30:00"
      }
    ]
  }
}</pre></div> </div></div> <hr></div> <div class="right"><div class="code-example svelte-fapltk"><div class="header svelte-fapltk"><div class="title svelte-fapltk">Example request:</div> <div class="copy"><a href="javascript:" class="svelte-fapltk">Copy to clipboard</a></div></div> <pre class="svelte-fapltk"><code class="javascript hljs">fetch(<span class="hljs-string">"{{ _.base_url }}/corredor-provas/1"</span>, {
  <span class="hljs-string">"method"</span>: <span class="hljs-string">"PATCH"</span>,
  <span class="hljs-string">"headers"</span>: {
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"{{ _.token }}"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>
  },
  <span class="hljs-string">"body"</span>: {
    <span class="hljs-string">"prova_id"</span>: <span class="hljs-string">"1"</span>,
    <span class="hljs-string">"corredor_id"</span>: <span class="hljs-string">"1"</span>,
    <span class="hljs-string">"relations"</span>: {
      <span class="hljs-string">"corredorResultado"</span>: [
        {
          <span class="hljs-string">"corredor_prova_id"</span>: <span class="hljs-string">"1"</span>,
          <span class="hljs-string">"horario_inicio"</span>: <span class="hljs-string">"12:00:00"</span>,
          <span class="hljs-string">"horario_fim"</span>: <span class="hljs-string">"12:30:00"</span>
        }
      ]
    }
  }
})
  .then(<span class="hljs-function"><span class="hljs-params">response</span> =&gt;</span> <span class="hljs-built_in">console</span>.log(response))
  .catch(<span class="hljs-function"><span class="hljs-params">err</span> =&gt;</span> <span class="hljs-built_in">console</span>.error(err));</code></pre></div> </div></div><div class="row"><div class="left"><div class="anchor svelte-fapltk" id="req_b8f9e9a9b6d04e02bebfc571f8881e35">&nbsp;</div> <h3 class="request-title"><strong class="get svelte-fapltk">GET</strong> show</h3> <pre class="url svelte-fapltk">{{ _.base_url }}/corredor-provas/4</pre>  <div class="tables"> <div class="table svelte-1wblyuk"><div class="header svelte-1wblyuk"><span class="title svelte-1wblyuk">Headers</span> </div>  <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Authorization</div> <div class="value svelte-1wblyuk">{{ _.token }}</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Accept</div> <div class="value svelte-1wblyuk">application/json</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Content-Type</div> <div class="value svelte-1wblyuk">application/json</div></div> </div> </div> <hr></div> <div class="right"><div class="code-example svelte-fapltk"><div class="header svelte-fapltk"><div class="title svelte-fapltk">Example request:</div> <div class="copy"><a href="javascript:" class="svelte-fapltk">Copy to clipboard</a></div></div> <pre class="svelte-fapltk"><code class="javascript hljs">fetch(<span class="hljs-string">"{{ _.base_url }}/corredor-provas/4"</span>, {
  <span class="hljs-string">"method"</span>: <span class="hljs-string">"GET"</span>,
  <span class="hljs-string">"headers"</span>: {
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"{{ _.token }}"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>
  },
  <span class="hljs-string">"body"</span>: <span class="hljs-literal">null</span>
})
  .then(<span class="hljs-function"><span class="hljs-params">response</span> =&gt;</span> <span class="hljs-built_in">console</span>.log(response))
  .catch(<span class="hljs-function"><span class="hljs-params">err</span> =&gt;</span> <span class="hljs-built_in">console</span>.error(err));</code></pre></div> </div></div><div class="row"><div class="left"><div class="anchor svelte-fapltk" id="req_b5e1750f08874838aab682fd64c59ce6">&nbsp;</div> <h3 class="request-title"><strong class="delete svelte-fapltk">DELETE</strong> delete</h3> <pre class="url svelte-fapltk">{{ _.base_url }}/corredor-provas/4</pre>  <div class="tables"> <div class="table svelte-1wblyuk"><div class="header svelte-1wblyuk"><span class="title svelte-1wblyuk">Headers</span> </div>  <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Authorization</div> <div class="value svelte-1wblyuk">{{ _.token }}</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Accept</div> <div class="value svelte-1wblyuk">application/json</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Content-Type</div> <div class="value svelte-1wblyuk">application/json</div></div> </div> </div> <hr></div> <div class="right"><div class="code-example svelte-fapltk"><div class="header svelte-fapltk"><div class="title svelte-fapltk">Example request:</div> <div class="copy"><a href="javascript:" class="svelte-fapltk">Copy to clipboard</a></div></div> <pre class="svelte-fapltk"><code class="javascript hljs">fetch(<span class="hljs-string">"{{ _.base_url }}/corredor-provas/4"</span>, {
  <span class="hljs-string">"method"</span>: <span class="hljs-string">"DELETE"</span>,
  <span class="hljs-string">"headers"</span>: {
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"{{ _.token }}"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>
  },
  <span class="hljs-string">"body"</span>: <span class="hljs-literal">null</span>
})
  .then(<span class="hljs-function"><span class="hljs-params">response</span> =&gt;</span> <span class="hljs-built_in">console</span>.log(response))
  .catch(<span class="hljs-function"><span class="hljs-params">err</span> =&gt;</span> <span class="hljs-built_in">console</span>.error(err));</code></pre></div> </div></div><div class="row"><div class="left"><h2>Corredor Resultados</h2>  <hr></div> <div class="right"></div></div> <div class="row"><div class="left"><div class="anchor svelte-fapltk" id="req_6b04495e157b4b37bb6fec32cb8d2cce">&nbsp;</div> <h3 class="request-title"><strong class="get svelte-fapltk">GET</strong> table</h3> <pre class="url svelte-fapltk">{{ _.base_url }}/corredor-provas/?rows=10</pre>  <div class="tables"> <div class="table svelte-1wblyuk"><div class="header svelte-1wblyuk"><span class="title svelte-1wblyuk">Headers</span> </div>  <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Authorization</div> <div class="value svelte-1wblyuk">{{ _.token }}</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Accept</div> <div class="value svelte-1wblyuk">application/json</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Content-Type</div> <div class="value svelte-1wblyuk">application/json</div></div> </div> </div> <hr></div> <div class="right"><div class="code-example svelte-fapltk"><div class="header svelte-fapltk"><div class="title svelte-fapltk">Example request:</div> <div class="copy"><a href="javascript:" class="svelte-fapltk">Copy to clipboard</a></div></div> <pre class="svelte-fapltk"><code class="javascript hljs">fetch(<span class="hljs-string">"{{ _.base_url }}/corredor-provas/?rows=10"</span>, {
  <span class="hljs-string">"method"</span>: <span class="hljs-string">"GET"</span>,
  <span class="hljs-string">"headers"</span>: {
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"{{ _.token }}"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>
  },
  <span class="hljs-string">"body"</span>: <span class="hljs-literal">null</span>
})
  .then(<span class="hljs-function"><span class="hljs-params">response</span> =&gt;</span> <span class="hljs-built_in">console</span>.log(response))
  .catch(<span class="hljs-function"><span class="hljs-params">err</span> =&gt;</span> <span class="hljs-built_in">console</span>.error(err));</code></pre></div> </div></div><div class="row"><div class="left"><div class="anchor svelte-fapltk" id="req_b87b6bff63d64d9f872d040798b29481">&nbsp;</div> <h3 class="request-title"><strong class="post svelte-fapltk">POST</strong> create</h3> <pre class="url svelte-fapltk">{{ _.base_url }}/corredor-provas/1/resultados/</pre>  <div class="tables"> <div class="table svelte-1wblyuk"><div class="header svelte-1wblyuk"><span class="title svelte-1wblyuk">Headers</span> </div>  <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Authorization</div> <div class="value svelte-1wblyuk">{{ _.token }}</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Accept</div> <div class="value svelte-1wblyuk">application/json</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Content-Type</div> <div class="value svelte-1wblyuk">application/json</div></div> </div> <div class="table svelte-1wblyuk"><div class="header svelte-1wblyuk"><span class="title svelte-1wblyuk">Body</span> <span class="note svelte-1wblyuk">json</span></div> <div class="raw-data"><pre>{
  "horario_inicio": "12:00",
  "horario_fim": "12:30"
}</pre></div> </div></div> <hr></div> <div class="right"><div class="code-example svelte-fapltk"><div class="header svelte-fapltk"><div class="title svelte-fapltk">Example request:</div> <div class="copy"><a href="javascript:" class="svelte-fapltk">Copy to clipboard</a></div></div> <pre class="svelte-fapltk"><code class="javascript hljs">fetch(<span class="hljs-string">"{{ _.base_url }}/corredor-provas/1/resultados/"</span>, {
  <span class="hljs-string">"method"</span>: <span class="hljs-string">"POST"</span>,
  <span class="hljs-string">"headers"</span>: {
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"{{ _.token }}"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>
  },
  <span class="hljs-string">"body"</span>: {
    <span class="hljs-string">"horario_inicio"</span>: <span class="hljs-string">"12:00"</span>,
    <span class="hljs-string">"horario_fim"</span>: <span class="hljs-string">"12:30"</span>
  }
})
  .then(<span class="hljs-function"><span class="hljs-params">response</span> =&gt;</span> <span class="hljs-built_in">console</span>.log(response))
  .catch(<span class="hljs-function"><span class="hljs-params">err</span> =&gt;</span> <span class="hljs-built_in">console</span>.error(err));</code></pre></div> </div></div><div class="row"><div class="left"><div class="anchor svelte-fapltk" id="req_4937b1de5a72481dbe8137b928fcbd59">&nbsp;</div> <h3 class="request-title"><strong class="patch svelte-fapltk">PATCH</strong> update</h3> <pre class="url svelte-fapltk">{{ _.base_url }}/corredor-provas/4/resultados/1</pre>  <div class="tables"> <div class="table svelte-1wblyuk"><div class="header svelte-1wblyuk"><span class="title svelte-1wblyuk">Headers</span> </div>  <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Authorization</div> <div class="value svelte-1wblyuk">{{ _.token }}</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Accept</div> <div class="value svelte-1wblyuk">application/json</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Content-Type</div> <div class="value svelte-1wblyuk">application/json</div></div> </div> <div class="table svelte-1wblyuk"><div class="header svelte-1wblyuk"><span class="title svelte-1wblyuk">Body</span> <span class="note svelte-1wblyuk">json</span></div> <div class="raw-data"><pre>{
  "horario_inicio": "12:00",
  "horario_fim": "12:40"
}</pre></div> </div></div> <hr></div> <div class="right"><div class="code-example svelte-fapltk"><div class="header svelte-fapltk"><div class="title svelte-fapltk">Example request:</div> <div class="copy"><a href="javascript:" class="svelte-fapltk">Copy to clipboard</a></div></div> <pre class="svelte-fapltk"><code class="javascript hljs">fetch(<span class="hljs-string">"{{ _.base_url }}/corredor-provas/4/resultados/1"</span>, {
  <span class="hljs-string">"method"</span>: <span class="hljs-string">"PATCH"</span>,
  <span class="hljs-string">"headers"</span>: {
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"{{ _.token }}"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>
  },
  <span class="hljs-string">"body"</span>: {
    <span class="hljs-string">"horario_inicio"</span>: <span class="hljs-string">"12:00"</span>,
    <span class="hljs-string">"horario_fim"</span>: <span class="hljs-string">"12:40"</span>
  }
})
  .then(<span class="hljs-function"><span class="hljs-params">response</span> =&gt;</span> <span class="hljs-built_in">console</span>.log(response))
  .catch(<span class="hljs-function"><span class="hljs-params">err</span> =&gt;</span> <span class="hljs-built_in">console</span>.error(err));</code></pre></div> </div></div><div class="row"><div class="left"><div class="anchor svelte-fapltk" id="req_99fafb6243334517abaa695a26fd666b">&nbsp;</div> <h3 class="request-title"><strong class="get svelte-fapltk">GET</strong> show</h3> <pre class="url svelte-fapltk">{{ _.base_url }}/corredor-provas/4/resultados/4</pre>  <div class="tables"> <div class="table svelte-1wblyuk"><div class="header svelte-1wblyuk"><span class="title svelte-1wblyuk">Headers</span> </div>  <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Authorization</div> <div class="value svelte-1wblyuk">{{ _.token }}</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Accept</div> <div class="value svelte-1wblyuk">application/json</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Content-Type</div> <div class="value svelte-1wblyuk">application/json</div></div> </div> </div> <hr></div> <div class="right"><div class="code-example svelte-fapltk"><div class="header svelte-fapltk"><div class="title svelte-fapltk">Example request:</div> <div class="copy"><a href="javascript:" class="svelte-fapltk">Copy to clipboard</a></div></div> <pre class="svelte-fapltk"><code class="javascript hljs">fetch(<span class="hljs-string">"{{ _.base_url }}/corredor-provas/4/resultados/4"</span>, {
  <span class="hljs-string">"method"</span>: <span class="hljs-string">"GET"</span>,
  <span class="hljs-string">"headers"</span>: {
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"{{ _.token }}"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>
  },
  <span class="hljs-string">"body"</span>: <span class="hljs-literal">null</span>
})
  .then(<span class="hljs-function"><span class="hljs-params">response</span> =&gt;</span> <span class="hljs-built_in">console</span>.log(response))
  .catch(<span class="hljs-function"><span class="hljs-params">err</span> =&gt;</span> <span class="hljs-built_in">console</span>.error(err));</code></pre></div> </div></div><div class="row"><div class="left"><div class="anchor svelte-fapltk" id="req_7088f31c2ea946f38e0702a8857628d4">&nbsp;</div> <h3 class="request-title"><strong class="delete svelte-fapltk">DELETE</strong> delete</h3> <pre class="url svelte-fapltk">{{ _.base_url }}/corredor-provas/4/resultados/4</pre>  <div class="tables"> <div class="table svelte-1wblyuk"><div class="header svelte-1wblyuk"><span class="title svelte-1wblyuk">Headers</span> </div>  <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Authorization</div> <div class="value svelte-1wblyuk">{{ _.token }}</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Accept</div> <div class="value svelte-1wblyuk">application/json</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Content-Type</div> <div class="value svelte-1wblyuk">application/json</div></div> </div> </div> <hr></div> <div class="right"><div class="code-example svelte-fapltk"><div class="header svelte-fapltk"><div class="title svelte-fapltk">Example request:</div> <div class="copy"><a href="javascript:" class="svelte-fapltk">Copy to clipboard</a></div></div> <pre class="svelte-fapltk"><code class="javascript hljs">fetch(<span class="hljs-string">"{{ _.base_url }}/corredor-provas/4/resultados/4"</span>, {
  <span class="hljs-string">"method"</span>: <span class="hljs-string">"DELETE"</span>,
  <span class="hljs-string">"headers"</span>: {
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"{{ _.token }}"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>
  },
  <span class="hljs-string">"body"</span>: <span class="hljs-literal">null</span>
})
  .then(<span class="hljs-function"><span class="hljs-params">response</span> =&gt;</span> <span class="hljs-built_in">console</span>.log(response))
  .catch(<span class="hljs-function"><span class="hljs-params">err</span> =&gt;</span> <span class="hljs-built_in">console</span>.error(err));</code></pre></div> </div></div><div class="row"><div class="left"><h2>Login</h2>  <hr></div> <div class="right"></div></div> <div class="row"><div class="left"><div class="anchor svelte-fapltk" id="req_ac2afb4f1f5a4c3eab6bb19652fd5d0e">&nbsp;</div> <h3 class="request-title"><strong class="post svelte-fapltk">POST</strong> login</h3> <pre class="url svelte-fapltk">{{ _.base_url }}/usuario/login</pre>  <div class="tables"> <div class="table svelte-1wblyuk"><div class="header svelte-1wblyuk"><span class="title svelte-1wblyuk">Headers</span> </div>  <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">Content-Type</div> <div class="value svelte-1wblyuk">multipart/form-data</div></div> </div> <div class="table svelte-1wblyuk"><div class="header svelte-1wblyuk"><span class="title svelte-1wblyuk">Body</span> <span class="note svelte-1wblyuk">formdata</span></div>  <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">email</div> <div class="value svelte-1wblyuk">admin@deliverit.com.br</div></div> <div class="row svelte-1wblyuk"><div class="name svelte-1wblyuk">senha</div> <div class="value svelte-1wblyuk">123456</div></div> </div></div> <hr></div> <div class="right"><div class="code-example svelte-fapltk"><div class="header svelte-fapltk"><div class="title svelte-fapltk">Example request:</div> <div class="copy"><a href="javascript:" class="svelte-fapltk">Copy to clipboard</a></div></div> <pre class="svelte-fapltk"><code class="javascript hljs"><span class="hljs-keyword">const</span> form = <span class="hljs-keyword">new</span> FormData();
form.append(<span class="hljs-string">"email"</span>, <span class="hljs-string">"admin@deliverit.com.br"</span>);
form.append(<span class="hljs-string">"senha"</span>, <span class="hljs-string">"123456"</span>);

fetch(<span class="hljs-string">"{{ _.base_url }}/usuario/login"</span>, {
  <span class="hljs-string">"method"</span>: <span class="hljs-string">"POST"</span>,
  <span class="hljs-string">"headers"</span>: {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"multipart/form-data"</span>
  },
  <span class="hljs-string">"body"</span>: form
})
  .then(<span class="hljs-function"><span class="hljs-params">response</span> =&gt;</span> <span class="hljs-built_in">console</span>.log(response))
  .catch(<span class="hljs-function"><span class="hljs-params">err</span> =&gt;</span> <span class="hljs-built_in">console</span>.error(err));</code></pre></div> </div></div></section></section>
