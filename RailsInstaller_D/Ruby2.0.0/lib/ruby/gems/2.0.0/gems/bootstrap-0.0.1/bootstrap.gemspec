# -*- encoding: utf-8 -*-
$:.push File.expand_path("../lib", __FILE__)
require "bootstrap/version"

Gem::Specification.new do |s|
  s.name        = "bootstrap"
  s.version     = Bootstrap::VERSION
  s.authors     = ["Umair Siddique"]
  s.email       = ["umairsiddique@gmail.com"]
  s.homepage    = ""
  s.summary     = %q{Bootstrap}
  s.description = %q{Bootstrap}

  s.rubyforge_project = "bootstrap"

  s.files         = `git ls-files`.split("\n")
  s.test_files    = `git ls-files -- {test,spec,features}/*`.split("\n")
  s.executables   = `git ls-files -- bin/*`.split("\n").map{ |f| File.basename(f) }
  s.require_paths = ["lib"]

  # specify any dependencies here; for example:
  # s.add_development_dependency "rspec"
  # s.add_runtime_dependency "rest-client"
end
