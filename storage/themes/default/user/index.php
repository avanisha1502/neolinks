<div class="row">
    <div class="col-xl-2 col-lg-3 col-md-4 d-flex">
        <div class="w-100">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="fw-bold mb-4"><?php ee('Links') ?></h5>
                            <h1 class="mt-1 mb-3"><?php echo $count->links ?></h1>
                            <div class="mb-1">
                                <span class="text-success"> +<?php echo $count->linksToday ?></span>
                                <span class="text-muted"><?php ee('Today') ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="fw-bold mb-4"><?php ee('Clicks') ?></h5>
                            <h1 class="mt-1 mb-3"><?php echo $count->clicks ?></h1>
                            <div class="mb-1">
                                <span class="text-success"> +<?php echo $count->clicksToday ?></span>
                                <span class="text-muted"><?php ee('Today') ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-10 col-lg-9 col-md-8">
        <div class="card shadow-sm">
            <div class="card-header">
                <h5 class="fw-bold mb-0"><?php ee('Recent Clicks') ?></h5>
            </div>
            <div class="card-body py-3">
                <div class="chart chart-sm">
                    <canvas data-trigger="chart" data-url="<?php echo route('user.clicks') ?>" data-color-start="#3B7DDD" data-color-stop="rgba(255,255,255,0.1)"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-xl-7">
        <?php if(user()->teamPermission('links.create')): ?>
            <?php if(config('manualapproval') && !user()->verified): ?>
                <div class="alert bg-dark rounded p-3 text-white"><?php ee('We are currently manually approving links. As soon as the link is approved, you will be able to start using it.') ?></div>
            <?php endif ?>
            <div class="card shadow-sm mb-5">
                <div class="card-body">
                    <?php view('partials.shortener') ?>
                </div>
            </div>
        <?php endif ?>
        <div class="border rounded p-2 mb-2">
            <div class="mb-2 d-flex align-items-center">
                <h4 class="mb-3 fw-bold"><?php ee('Recent Links') ?></h4>
                <?php if($urls): ?>
                    <div class="ms-auto">
                        <span data-bs-toggle="dropdown" aria-expanded="false" class="me-2" role="button"><i data-feather="more-horizontal"></i></span>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo route('links') ?>"><?php ee('View all') ?></a></li>
                        </ul>
                    </div>
                <?php endif ?>
            </div>
            <div class="card shadow-sm mb-2">
                <div class="p-3 d-flex align-items-center">
                    <div>
                        <form method="post" action="" data-trigger="options">
                            <?php echo csrf() ?>
                            <input type="hidden" name="selected">
                            <div class="btn-group btn-group-sm border rounded px-1">
                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo e("Select All") ?>" data-trigger="selectall" class="fa fa-check-square btn px-3 py-2"></a>
                                <a href="#" data-bs-toggle="dropdown" class="btn p-1"><span data-count-selected="<?php ee('Selected') ?>"><?php ee('Actions') ?></span> <i class="fa fa-chevron-down"></i></a>
                                <div class="dropdown-menu">
                                    <?php if(user()->teamPermission('links.edit')): ?>
                                        <?php if(\Gem::currentRoute() == 'archive'): ?>
                                            <a href="<?php echo route('links.unarchive') ?>" data-trigger="archiveselected" class="dropdown-item px-3"><i data-feather="briefcase" class="me-2"></i> <?php echo e("Unarchive Selected") ?></a>
                                        <?php else: ?>
                                            <a href="<?php echo route('links.archive') ?>" data-trigger="archiveselected" class="dropdown-item px-3"><i data-feather="briefcase" class="me-2"></i> <?php echo e("Archive Selected") ?></a>
                                        <?php endif ?>
                                    <?php endif ?>
                                    <?php if(user()->teamPermission('links.edit')): ?>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#bundleModal" data-trigger="getchecked" data-for="#bundleids" class="dropdown-item px-3"><i data-feather="crosshair" class="me-2"></i> <?php echo e("Add to Campaign") ?></a>

                                        <a href="#" data-bs-toggle="modal" data-bs-target="#channelModal" data-trigger="getchecked" data-for="#channelids" class="dropdown-item px-3"><i data-feather="package" class="me-2"></i> <?php echo e("Add to Channel") ?></a>

                                        <a href="#" data-bs-toggle="modal" data-bs-target="#pixelModal" data-trigger="getchecked" data-for="#pixelids" class="dropdown-item px-3"><i data-feather="compass" class="me-2"></i> <?php echo e("Add Pixels") ?></a>
                                    </span>
                                    <?php endif ?>
                                    <?php if(\Models\User::where('id', user()->rID())->first()->has('export') !== false): ?>
                                        <a href="<?php echo route('links.export') ?>" data-trigger="submitchecked" class="dropdown-item px-3"><i data-feather="download" class="me-2"></i> <?php echo e("Export") ?></a>
                                    <?php endif ?>
                                    <div class="dropdown-divider"></div>
                                    <?php if(user()->teamPermission('links.delete')): ?>
                                        <a title="<?php echo e("Delete Selected") ?>" data-bs-toggle="modal" data-bs-target="#deleteAllModal" class="dropdown-item px-3 text-danger"><i data-feather="trash" class="me-2"></i> <?php echo e("Delete Selected") ?></a>
                                    <?php endif ?>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="my-md-0 my-2 ms-auto">
                        <div class="rounded border">
                            <a href="#search" data-bs-toggle="collapse" class="btn btn-white bg-white"><i class="align-middle" data-feather="search"></i></a>
                        </div>
                    </div>
                </div>
                <form class="rounded border collapse mx-3 mb-3 p-3" id="search" action="<?php echo route('search') ?>">
                    <div class="input-group input-group-navbar">
                        <input type="text" class="form-control form-control-lg bg-white" placeholder="<?php ee('Search for links') ?>" aria-label="Search">
                        <button class="btn btn-white bg-white" type="submit">
                            <i class="align-middle" data-feather="search"></i>
                        </button>
                        <button type="button" data-bs-toggle="collapse" data-bs-target="#search" class="btn btn-white d-none bg-white" data-trigger="clearsearch">
                            <i class="align-middle" data-feather="x"></i>
                        </button>
                    </div>
                </form>
            </div>
            <div class="links">
                <div id="return-ajax"></div>
                <div id="link-holder" data-refresh="<?php echo \Gem::currentRoute() == 'archive' ? route('links.refresh.archive') : route('links.refresh') ?>" data-fetch="<?php echo route('links.fetch')?>">
                    <?php if($urls): ?>
                        <?php foreach($urls as $url): ?>
                            <?php view('partials.links', compact('url')) ?>
                        <?php endforeach ?>
                    <?php else: ?>
                        <p class="text-center"><?php ee('No links found. You can create some.') ?></p>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-5">
        <div class="border rounded p-2">            
            <div class="d-flex">
                <h4 class="mb-3 fw-bold"><?php ee('Recent Activity') ?></h4>
                <div class="ms-auto">
                    <span data-bs-toggle="dropdown" aria-expanded="false" class="me-2" role="button"><i data-feather="more-horizontal"></i></span>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo route('user.stats.recent') ?>"><?php ee('View all') ?></a></li>
                    </ul>
                </div> 
            </div>
            <?php foreach($recentActivity as $stats): ?>
                <div class="card p-3 mb-0 mt-2">
                    <div class="d-flex align-items-start">
                        <div class="flex-grow-1">
                            <div class="float-end small">
                                <?php echo \Core\Helper::timeago($stats->date) ?>
                            </div>
                            <div class="mb-2">
                                <?php if($stats->url->qrid): ?>
                                    <span class="badge bg-success text-sm"><?php ee("QR Code") ?></span>
                                    <strong><?php echo $stats->qr ?></strong></a>
                                <?php elseif($stats->url->profileid): ?>
                                    <span class="badge bg-success text-sm"><?php ee("Bio Page") ?></span>
                                    <strong><?php echo $stats->profile ?></strong></a>
                                    <a href="<?php echo $stats->url->url ?>" target="_blank" rel="nofollow"><strong class="text-break"><?php echo \Core\Helper::truncate(\Core\Helper::empty($stats->url->meta_title, $stats->url->url), 30) ?></strong></a>
                                    <?php if($stats->url->alias || $stats->url->custom): ?>
                                        <small class="text-muted d-block d-sm-inline mt-2 mt-sm-0" data-href="<?php echo Helpers\App::shortRoute($stats->url->domain, $stats->url->alias.$stats->url->custom) ?>"><?php echo Helpers\App::shortRoute($stats->url->domain, $stats->url->alias.$stats->url->custom) ?></small>
                                    <?php endif ?>
                                <?php else: ?>
                                    <img src="<?php echo route('link.ico', $stats->urlid) ?>" width="16" height="16" class="rounded-circle me-1" alt="<?php echo $stats->url->meta_title ?>">
                                    <a href="<?php echo $stats->url->url ?>" target="_blank" rel="nofollow"><strong class="text-break"><?php echo \Core\Helper::truncate(\Core\Helper::empty($stats->url->meta_title, $stats->url->url), 30) ?></strong></a>
                                    <?php if($stats->url->alias || $stats->url->custom): ?>
                                        <small class="text-muted d-block d-sm-inline mt-2 mt-sm-0" data-href="<?php echo Helpers\App::shortRoute($stats->url->domain, $stats->url->alias.$stats->url->custom) ?>"><?php echo Helpers\App::shortRoute($stats->url->domain, $stats->url->alias.$stats->url->custom) ?></small>
                                    <?php endif ?>
                                <?php endif ?>
                            </div>
                            <div>
                                <?php if($stats->country): ?>
                                    <span class="text-start d-inline-block me-2">
                                        <img src="<?php echo \Helpers\App::flag($stats->country) ?>" width="16" class="rounded me-1" alt=" <?php echo ucfirst($stats->country) ?>">
                                        <small><?php echo $stats->city ? ucfirst($stats->city).',': e('Somewhere from') ?> <?php echo ucfirst($stats->country) ?></small>
                                    </span>
                                <?php endif ?>
                                <?php if($stats->os): ?>
                                    <span class="text-start d-inline-block me-2">
                                        <img src="<?php echo \Helpers\App::os($stats->os) ?>" width="16" class="rounded me-1" alt=" <?php echo ucfirst($stats->os) ?>">
                                        <small class="text-navy"><?php echo $stats->os ?></small>
                                    </span>
                                <?php endif ?>
                                <?php if($stats->browser): ?>
                                    <span class="text-start d-inline-block me-2">
                                        <img src="<?php echo \Helpers\App::browser($stats->browser) ?>" width="16" class="rounded me-1" alt=" <?php echo ucfirst($stats->browser) ?>">
                                        <small class="text-navy"><?php echo $stats->browser ?></small>
                                    </span>
                                <?php endif ?>
                                <?php if($stats->domain): ?>
                                    <span class="text-start d-inline-block me-2">
                                        <i data-feather="globe" class="me-1"></i>
                                        <a href="<?php echo $stats->referer ?>" rel="nofollow" target="_blank"><small class="text-navy"><?php echo $stats->domain ?></small></a>
                                    </span>
                                <?php else: ?>
                                    <span class="text-start d-inline-block me-2">
                                        <i data-feather="globe" class="me-1"></i>
                                        <small class="text-navy"><?php echo ee('Direct, email or others') ?></small>
                                    </span>
                                <?php endif ?>
                                <?php if($stats->language): ?>
                                    <span class="text-start d-inline-block">
                                        <i data-feather="user" class="me-1"></i>
                                        <small class="text-navy"><?php echo strtoupper($stats->language) ?></small>
                                    </span>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>

<?php if(user()->teamPermission('links.delete')): ?>
<div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-bold"><?php ee('Are you sure you want to delete this?') ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><?php ee('You are trying to delete a record. This action is permanent and cannot be reversed.') ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php ee('Cancel') ?></button>
        <a href="#" class="btn btn-danger" data-trigger="confirm"><?php ee('Confirm') ?></a>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="deleteAllModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-bold"><?php ee('Are you sure you want to proceed?') ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><?php ee('You are trying to delete many records. This action is permanent and cannot be reversed.') ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php ee('Cancel') ?></button>
        <a href="<?php echo route('links.deleteall') ?>" class="btn btn-danger" data-trigger="submitchecked"><?php ee('Confirm') ?></a>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="resetModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-bold"><?php ee('Are you sure you want to reset this?') ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><?php ee('You are trying to reset all statistic data for this link. This action is permanent and cannot be reversed.') ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php ee('Cancel') ?></button>
        <a href="#" class="btn btn-danger" data-trigger="confirm"><?php ee('Confirm') ?></a>
      </div>
    </div>
  </div>
</div>
<?php endif ?>
<div class="modal fade" id="bundleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form action="<?php echo route('links.addtocampaign') ?>" data-trigger="server-form">
        <?php echo csrf() ?>
        <div class="modal-header">
            <h5 class="modal-title fw-bold"><?php ee('Add to Campaign') ?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <label for="campaigns" class="form-label fw-bold d-block mb-2"><?php ee('Campaigns') ?></label>
            <div class="form-group rounded input-select">
                <select name="campaigns" id="campaigns" class="form-control" data-toggle="select">
                    <option value="0"><?php ee('None') ?></option>
                    <?php foreach(\Core\DB::bundle()->where('userid', user()->rID())->findArray() as $campaign): ?>
                        <option value="<?php echo $campaign['id'] ?>"><?php echo $campaign['name'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <input type="hidden" name="bundleids" id="bundleids" value="">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php ee('Cancel') ?></button>
            <button type="submit" class="btn btn-success" class="btn btn-success" data-bs-dismiss="modal" data-trigger="addtocampaign"><?php ee('Add') ?></button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="channelModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form action="<?php echo route('channel.addto', ['links', null]) ?>" data-trigger="server-form">
        <?php echo csrf() ?>
        <div class="modal-header">
            <h5 class="modal-title fw-bold"><?php ee('Add to Channels') ?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <label for="channels" class="form-label fw-bold d-block mb-2"><?php ee('Channels') ?></label>
            <div class="form-group rounded input-select">
                <select name="channels[]" id="channels" class="form-control" multiple data-toggle="select">
                    <?php foreach(\Core\DB::channels()->where('userid', user()->rID())->findArray() as $channel): ?>
                        <option value="<?php echo $channel['id'] ?>"><?php echo $channel['name'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <input type="hidden" name="channelids" id="channelids" value="">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php ee('Cancel') ?></button>
            <button type="submit" class="btn btn-success" class="btn btn-success" data-bs-dismiss="modal" data-trigger="addtocampaign"><?php ee('Add') ?></button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="pixelModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form action="<?php echo route('pixels.addto') ?>" data-trigger="server-form">
        <?php echo csrf() ?>
        <div class="modal-header">
            <h5 class="modal-title fw-bold"><?php ee('Add Pixels') ?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <label for="pixels" class="form-label fw-bold d-block mb-2"><?php ee('Pixels') ?></label>
            <div class="form-group rounded input-select">
                <select name="pixels[]" data-placeholder="Your Pixels" multiple data-toggle="select">
                    <?php foreach(\Core\Auth::user()->pixels() as $type => $pixels): ?>
                        <optgroup label="<?php echo ucwords($type) ?>">
                        <?php foreach($pixels as $pixel): ?>
                            <option value="<?php echo $pixel->id ?>"><?php echo $pixel->name ?></option>
                        <?php endforeach ?>
                        </optgroup>
                    <?php endforeach ?>
                </select>
            </div>
            <input type="hidden" name="pixelids" id="pixelids" value="">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php ee('Cancel') ?></button>
            <button type="submit" class="btn btn-success" class="btn btn-success" data-bs-dismiss="modal" data-trigger="addtopixels"><?php ee('Add') ?></button>
        </div>
      </form>
    </div>
  </div>
</div>