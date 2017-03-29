<div class="card">
  <div class="card-header">
    <!-- Task name -->
    <div class="card-header__title" v-if="open_task">
      <h3 v-text="open_task.description"></h3>
      <span>
        <time class="card__created-at" datetime="">created @{{ open_task.created_at_string }}</time>
      </span>
    </div>

    <div class="card-header__right">
      <div class="dropdown" v-if="open_task">
        <!-- GitHub integration -->
        <button type="button" class="button button--link button--dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="icon-git"></span> #42
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu dropdown-menu--right">
          <li><a href="#">Go to issue</a></li>
          <li><a href="#">Create GitHub issue</a></li>
        </ul>
      </div>

      <div class="dropdown">
        <!-- Time tracking -->
        <button type="button" class="button button--dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="icon-clock"></span>
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu dropdown-menu--right dropdown-menu--wide">
          <li>
            <div>
              <form action="#" method="post">
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <span class="icon-calendar"></span>
                    </span>
                    <input class="form-control js-datepicker" type="date" name="todo-date">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <span class="icon-user"></span>
                    </span>
                    <select class="form-control js-multiple-select" name="assigned" multiple>
                      <option value="">Christian</option>
                      <option value="" selected="selected">Jeremy</option>
                      <option value="">Jim</option>
                      <option value="">Peter</option>
                      <option value="">Vince</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <span class="icon-clock"></span>
                    </span>
                    <input class="form-control" type="number" name="todo-time" placeholder="Time... (e.g. 2.5, or 2:30)" autocomplete="off">
                  </div>
                </div>
                <div class="form-group">
                  <input class="form-control" type="text" name="todo-description" placeholder="Description..." autocomplete="off">
                </div>
                <div class="form-group">
                  <button class="button" type="submit" name="button">Add</button>
                  <a class="button button--link" href="time-log.php">View log</a>
                </div>
              </form>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="card-meta">
    <!-- Task assigned & deadline -->
    <div class="row">
      <form action="#" method="post">
        <div class="col-sm-6">
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon">
                <span class="icon-user"></span>
              </span>
              <select id="assignee" class="form-control js-multiple-select" name="assigned" data-placeholder="Assign" multiple>
                <option value="5">Christian</option>
                <option value="4">Jeremy</option>
                <option value="3">Jim</option>
                <option value="2">Peter</option>
                <option value="1">Vince</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon">
                <span class="icon-calendar"></span>
              </span>
              <input class="form-control js-datepicker" type="date" name="deadline" placeholder="Date">
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>

  <div class="card-extras">
    <!-- Task comments and files -->
    <div class="row">

      <div class="col-sm-4 col-sm-push-8">
        <h4><span class="icon-attach"></span> Files</h4>

        <ul class="list-nav">
          <li class="list-nav__item">
            <a href="#">filename.psd</a>
            <small>Uploaded yesterday</small>
          </li>
          <li class="list-nav__item">
            <a href="#">filename.psd</a>
            <small>Uploaded yesterday</small>
          </li>
          <li class="list-nav__item">
            <a href="#">filename.psd</a>
            <small>Uploaded Feb. 3rd, 2016</small>
          </li>
          <li class="list-nav__item">
            <a href="#">filename.psd</a>
            <small>Uploaded Feb. 3rd, 2016</small>
          </li>
          <li class="list-nav__item">
            <a href="#">filename.psd</a>
            <small>Uploaded Jan. 31st, 2016</small>
          </li>
        </ul>

        <form action="#" method="post">
          <div class="form-group">
            <input class="form-control form-control--file-uploader" type="file" multiple>
          </div>
          <button class="button" type="submit" name="button">Add files</button>
        </form>
      </div>

      <div class="col-sm-8 col-sm-pull-4">
        <h4><span class="icon-comment-empty"></span> Comments</h4>
        <transition-group name="list" tag="ul" class="u-list-blank" v-if="open_task && open_task.comments.length">
          <li class="comment" v-for="comment in open_task.comments" :key="comment">
            <div class="comment__meta">
              <time>@{{ comment.created_at_string }}</time>
            </div>
            <div class="comment__author">
              <div class="profile-image">
                <img src="http://placehold.it/32x32.jpg" alt="">
              </div>
            </div>
            <div class="comment__body" v-html="comment.parsed_content">
            </div>
          </li>
        </transition-group>
        <p v-if="!open_task || !open_task.comments.length">No comments yet</p>

        <form id="new_comment_form" class="" action="#" method="post" @submit.prevent="onPostComment">
          <input type="hidden" v-if="open_task" :value="open_task.id" name="task_id">
          <input type="hidden" value="{{ Auth::id() }}" name="creator_id">
          <div class="form-group">
            <textarea class="form-control" name="comment" rows="4" placeholder="Reply..." v-model="new_comment"></textarea>
            <div class="comment__meta">Markdown syntax is supported</div>
          </div>
          <div class="form-group">
            <button class="button" type="submit" name="button">Post</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
