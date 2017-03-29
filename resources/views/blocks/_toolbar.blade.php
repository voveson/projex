<div class="toolbar">
  <div class="container-fluid">
    <ul class="toolbar-nav">
      <li class="toolbar-nav__item">
        <button type="button" class="button button--dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          New issue
        </button>
        <div class="dropdown-menu dropdown-menu--wide">
          <form action="#" method="post">
            <div class="form-group">
              <input class="form-control" type="text" name="name" placeholder="New issue..." autocomplete="off">
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon">
                  <span class="icon-user"></span>
                </span>
                <select class="form-control js-multiple-select" name="assigned" multiple>
                  <option value="">Christian</option>
                  <option value="">Jeremy</option>
                  <option value="">Jim</option>
                  <option value="">Peter</option>
                  <option value="">Vince</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon">
                  <span class="icon-calendar"></span>
                </span>
                <input class="form-control js-datepicker" type="date" name="dealine">
              </div>
            </div>
            <div class="form-group">
              <button class="button" type="submit" name="button">Add</button>
            </div>
          </form>
        </div>
      </li>
      <li class="toolbar-nav__item">
        <button type="button" class="button button--link button--dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          All lists
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
          <li>
            <a href="#">All lists</a>
          </li>
          <li class="divider" role="separator"></li>
          <li>
            <a href="#">List #1</a>
          </li>
          <li>
            <a href="#">List #2</a>
          </li>
          <li class="divider" role="separator"></li>
          <li class="dropdown-button">
            <a href="#" data-toggle="modal" data-target="#new-list">New List</a>
          </li>
        </ul>
      </li>
      <li class="toolbar-nav__item">
        <button type="button" class="button button--link button--dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          All milestones
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
          <li>
            <a href="#">All milestones</a>
          </li>
          <li class="divider" role="separator"></li>
          <li>
            <a href="#">Milestone #1</a>
          </li>
          <li>
            <a href="#">Milestone #2</a>
          </li>
          <li class="divider" role="separator"></li>
          <li class="dropdown-button">
            <a href="#" data-toggle="modal" data-target="#new-milestone">New Milestone</a>
          </li>
        </ul>
      </li>
    </ul>

    <ul class="toolbar-nav toolbar-nav--right">
      <li class="toolbar-nav__item">
        <a href="#" class="button button--link" data-toggle="modal" data-target="#project-notes">
          <span class="icon-folder-empty"></span>
        </a>
      </li>
      <li class="toolbar-nav__item">
        <a href="#" class="button button--link" data-toggle="modal" data-target="#project-credentials">
          <span class="icon-key"></span>
        </a>
      </li>
      <li class="toolbar-nav__item">
        <button type="button" class="button button--link button--dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="icon-ellipsis"></span>
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu dropdown-menu--right">
          <li>
            <a href="#" data-toggle="modal" data-target="#project-settings"><span class="icon-cog"></span> Project Settings</a>
          </li>
          <li>
            <a href="time-log.php"><span class="icon-clock"></span> Time log</a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</div>
