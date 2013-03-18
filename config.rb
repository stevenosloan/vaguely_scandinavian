$LOAD_PATH << File.join( Dir.pwd, '/lib' )


#   Routes
# -----------------------------------------

activate :directory_indexes

page "/*.php.erb" do
  set :layout, "layout"
end
# this atleast works on vagrant for now
set :php_include_path, "$_SERVER['DOCUMENT_ROOT'] . '/inc'"


ignore '/partials/*'

set :is_production, false


#   Extensions
# -----------------------------------------

activate :syntax

configure :development do
  require 'middleman-livereload'
  activate :livereload
end


#   Assets
# -----------------------------------------

set :css_dir, 'assets/css'
set :js_dir, 'assets/scripts'
set :images_dir, 'assets/images'


#   Markdown
# -----------------------------------------

## Markdown
set :markdown, {
  :fenced_code_blocks => true,
  :autolink => true,
  :smartypants => true,
  :space_after_headers => true
}
set :markdown_engine, :redcarpet

set :haml, { ugly: true, format: :html5 }


#   Helpers
# -----------------------------------------


#   Build Specific Configs
# -----------------------------------------

configure :build do

  # Change the Compass output style for deployment
  activate :minify_css

  # Minify Javascript on build
  activate :minify_javascript

  # Enable cache buster
  # Don't give a hash to assets in the static folder
  activate :asset_hash, :ignore => %r{^(assets/static/.*)}

  set :is_production, true

end