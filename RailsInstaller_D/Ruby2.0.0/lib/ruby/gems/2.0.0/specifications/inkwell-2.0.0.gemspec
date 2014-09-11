# -*- encoding: utf-8 -*-

Gem::Specification.new do |s|
  s.name = "inkwell"
  s.version = "2.0.0"

  s.required_rubygems_version = Gem::Requirement.new(">= 0") if s.respond_to? :required_rubygems_version=
  s.authors = ["Sergey Sokolov"]
  s.date = "2014-01-26"
  s.description = "Inkwell provides simple way to add social networking features like comments, reblogs, favorites, following/followers, communities, categories and timelines to your Ruby on Rails application."
  s.email = ["sokolov.sergey.a@gmail.com"]
  s.homepage = "https://github.com/salkar/inkwell#inkwell"
  s.require_paths = ["lib"]
  s.rubygems_version = "2.0.2"
  s.summary = "Inkwell provides simple way to add social networking features like comments, reblogs, favorites, following/followers, communities, categories and timelines to your Ruby on Rails application."

  if s.respond_to? :specification_version then
    s.specification_version = 4

    if Gem::Version.new(Gem::VERSION) >= Gem::Version.new('1.2.0') then
      s.add_runtime_dependency(%q<railties>, [">= 4.0.0"])
      s.add_runtime_dependency(%q<activerecord>, [">= 4.0.0"])
      s.add_development_dependency(%q<rspec-rails>, [">= 0"])
      s.add_development_dependency(%q<database_cleaner>, [">= 0"])
      s.add_development_dependency(%q<sqlite3>, [">= 0"])
      s.add_development_dependency(%q<rails>, [">= 4.0.0"])
    else
      s.add_dependency(%q<railties>, [">= 4.0.0"])
      s.add_dependency(%q<activerecord>, [">= 4.0.0"])
      s.add_dependency(%q<rspec-rails>, [">= 0"])
      s.add_dependency(%q<database_cleaner>, [">= 0"])
      s.add_dependency(%q<sqlite3>, [">= 0"])
      s.add_dependency(%q<rails>, [">= 4.0.0"])
    end
  else
    s.add_dependency(%q<railties>, [">= 4.0.0"])
    s.add_dependency(%q<activerecord>, [">= 4.0.0"])
    s.add_dependency(%q<rspec-rails>, [">= 0"])
    s.add_dependency(%q<database_cleaner>, [">= 0"])
    s.add_dependency(%q<sqlite3>, [">= 0"])
    s.add_dependency(%q<rails>, [">= 4.0.0"])
  end
end
