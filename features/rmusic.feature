Feature: [RMUSIC767]
    As a user I want to search for available episodes by brand name

@javascript
Scenario: Entering a string into a text box to search on.
    Given I am on a Web Page
    When I type a Search String into a Text Box and Submit
    Then I should be shown Results

@javascript
Scenario: Search string returns matches for a Brand name
    Given I am on a Web Page
    When I type a Search String into a Text Box and Submit
    And the Search String returns matches for brand name
    And there are available episodes for those brand names
    Then these episodes should be returned as results

@javascript
Scenario: Search string returns no matches for a Brand name
    Given I am on a Web Page
    When I type a Search String into a Text Box and Submit
    And the Search String returns no matches for brand name
    Then I should be shown a 'no results' message
    
@javascript
Scenario: Begin entering a string into a text box to search on and pause.
    Given I am on a Web Page
    When I begin typing a Search String into a Text Box and stop
    And there are brand names that contain the string I have typed
    Then I should be dynamically shown a list of those brands