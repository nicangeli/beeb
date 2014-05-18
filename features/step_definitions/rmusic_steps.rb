Given(/^I am on a Web Page$/) do
	visit 'http://localhost:8000/'
end

When(/^I type a Search String into a Text Box and Submit$/) do
	fill_in 'search', with: 'page'
	click_button('Search')
end

Then(/^I should be shown Results$/) do
	expect(page).to have_selector("ul")
end

When(/^the Search String returns matches for brand name$/) do
	fill_in 'search', with: 'page'
	click_button('Search')
end

When(/^there are available episodes for those brand names$/) do
	pass
end

Then(/^these episodes should be returned as results$/) do
	expect(page).to have_content('Off the Page: Siblings')
end

When(/^the Search String returns no matches for brand name$/) do
	fill_in 'search', with: 'noresults'
	click_button('Search')
end

Then(/^I should be shown a 'no results' message$/) do
	expect(page).to have_content('No results to display.')
end

When(/^I begin typing a Search String into a Text Box and stop$/) do
	fill_in 'search', with: 'page'
end

When(/^there are brand names that contain the string I have typed$/) do
	 pass
end

Then(/^I should be dynamically shown a list of those brands$/) do
	expect(page).to have_selector('ul')
	expect(page).to have_content('Off the Page: Siblings')
	expect(page).to have_content('Off the Page: Taboo')
end
