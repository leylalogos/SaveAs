# scoreboard
## Description
this project is for gaming platfrom for the saveAs company.
## API DOC

### GET /api/getGames
this api show exisits play in server and how many games played by players
#### Input

#### Result
status: 200
```json
[
	{
		"game_id": int,
		"game_title" : string,
		"total_play_count": int,
		"unique_users": int
	}
]
```
### POST /api/games/{game_id}/users/{user_id}/scores
this endpoint add score for a player in a game
#### Input
game_id : the game id (url param)
user_id : the user id (url param)
score: the score (body param)

#### Result
status : 201
```json
{
		"message": string 
}
```
### GET /api/game/{game_id}/scoreboard
this api shows the leader board for each game
#### Input
game_id : the game id (url param)

#### Result
status : 200
```json
[
	{
		"user_id": int,
		"total": string
	}
]
```

