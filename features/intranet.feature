Feature: Basic intranet
  Scenario: Homepage
    Given I am on "/intranet"
    Then I should see "Bienvenue"
