<div class="home-page">
    <% include Jumbotron %>
</div>
<% include PageUtilities %>

<% if $SuperGlueConnector %>
    $SuperGlueView
<% end_if %>
