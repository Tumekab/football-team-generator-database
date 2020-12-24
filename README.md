<h1> API for It's Coming Home - Football Team Generator App</h1>
<p>This API was created to co-inside with the technical challenge set by DevelopMe_ bootcamp. This API provides requests for a React Redux front-end which can be viewed here:
The GitHub repository for the front-end project is found here: https://github.com/Tumekab/football-team-generator </p>

<p>The API was created using Laravel with a Homestead database. The API was deployed using Heroku and can be found here: https://football-team-database.herokuapp.com/. </p>

<h2>API Setup</h2>
<p>The API consists of one table. This table is used to track each game when a user wishes to save their details once the teams have been generated. This then serves as a history on the app that can be viewed by the user. <br>
Details of the API requests are below.</p>

<h2>Requests</h2>
<p>All requests should use the basename: <code>https://football-team-database.herokuapp.com/</code>

<h3> Standard response for Games</h3>
<code><strong> GET /api/games </strong></code>
<p>Will return a list of all the games saved</p>
<br>
<code><strong> GET /api/games/{id}</strong></code>
<p>Will returns a specific game with the given id</p>
<br>
<code><strong> POST /api/games </strong></code>
<p>This will create a new game in the database</p>
<strong>Requests</strong>
<ul>
    <li>game_date: date (YYYY/MM/DD)</li>
    <li>team_one: string, max 50 characters</li>
    <li>team_two: string, max 50 characters</li>
    <li>winning_team: string, max 50 characters</li>
</ul>
<br>
<code><strong> PUT /api/games/{id} </strong></code>
<p>Will update an existing game with the given id</p>
<strong>Requests</strong>
<ul>
    <li>game_date: date (YYYY/MM/DD)</li>
    <li>team_one: string, max 50 characters</li>
    <li>team_two: string, max 50 characters</li>
    <li>winning_team: string, max 50 characters</li>
</ul>
<br>
<code><strong> DELETE /api/games/{id} </strong></code>
<p>Will delete a specific game with the given id</p>
<br>

<h2>Foot-Note (not to be ignored)</h2>
<em>Please note: ID numbers go up in 10. For example, the first game posted will have the id number of 1, then next game will have an id number of 11, next 21, next 31, and so on. This is a strange behaviour that I have not been able to understand why is happening. For now it is a quirk that will be fixed. </em>
