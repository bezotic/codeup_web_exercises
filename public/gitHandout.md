### Git, the Big Picture
- Git is a permanent record.
- Git is a time machine that allows us to travel through that permanent record.
- Git also allows us to travel into parallel universes (branches)
- GitHub is a service that hosts remote repositories.

## Using Git
A common way to manage the versions of your files and  content is to name files with increasing levels of description.
Example: `Resume.pdf`, `Resume_Final.pdf`,  `Resume_Final_Monday.pdf`, `Resume_FINAL_to_print.pdf`, and `Resume_print_before_interview.pdf`
vs. a permanent record with a time machine that can enter paralell dimensions

Git allows us to version our files and their contents by allowing us to take snapshots called commits. Our filenames remain the same and the history of commits creates a permanent record for our code and contents that have been in that file.

### Git Workflow
*"Commit early, commit often"*  and *"If code is not in GitHub then it doesn't exist"*

- `cd` into your local git repo (~/vagrant-lamp/sites/codeup.dev/)
- type `git status` between each step to orient yourself.
- Add or modify your files inside your local git repo.
- Add individual files
    - `git add hello_world.html` or `git add README.md`
    - `git add public/css/style.css`
- `git add -A` to add all files (not recommended, but useful)
- `git commit` in order to create a new commit of your added files.
- Write a useful git message that explains what you're doing and why.
- `git push origin master`




