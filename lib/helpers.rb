module CustomHelpers

  def script_url script_name, type=nil
    script_name << ".js"
    path = ["assets/scripts", type, script_name ].keep_if{|v| v}.join("/")
    asset_url(path)
  end

  def render_partial( partial_name, locals={} )
    partial "partials/_#{partial_name}", :locals => locals
  end

end