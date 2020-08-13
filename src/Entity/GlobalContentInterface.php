<?php

namespace Drupal\global_content\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Global content entities.
 *
 * @ingroup global_content
 */
interface GlobalContentInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Global content name.
   *
   * @return string
   *   Name of the Global content.
   */
  public function getName();

  /**
   * Sets the Global content name.
   *
   * @param string $name
   *   The Global content name.
   *
   * @return \Drupal\global_content\Entity\GlobalContentInterface
   *   The called Global content entity.
   */
  public function setName($name);

  /**
   * Gets the Global content creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Global content.
   */
  public function getCreatedTime();

  /**
   * Sets the Global content creation timestamp.
   *
   * @param int $timestamp
   *   The Global content creation timestamp.
   *
   * @return \Drupal\global_content\Entity\GlobalContentInterface
   *   The called Global content entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Global content published status indicator.
   *
   * Unpublished Global content are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Global content is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Global content.
   *
   * @param bool $published
   *   TRUE to set this Global content to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\global_content\Entity\GlobalContentInterface
   *   The called Global content entity.
   */
  public function setPublished($published);

}
